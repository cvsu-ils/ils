<div class="container mt-5">
    <div class="row ">
        <div class="col-md-12">
            <div class="row d-flex align-items-center pb-3">
                <div class="col-lg-3 col-md-12 col-sm-12 mb-3">
                    <div class="mb-2 d-lg-block d-md-none" style="height: 24px;"></div>
                    <h1 class="text-left text-uppercase">E-books</h1>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                    <div class="mb-2 d-lg-block d-md-none" style="height: 24px;"></div>
                    <input class="form-control dropdown" type="text" placeholder="Search by Title, Author, Subject or ISBN..." data-input="search" value="<?php echo $search;?>">
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 mb-3">
                    <label class="text-muted">Sort by</label>
                    <select class="form-control" data-select="order">
                        <?php
                            $orders = [
                                'newest' => "Newest to oldest",
                                'oldest' => "Oldest to newest", 
                                'title' => "Title (A-Z)", 
                                'titleReverse' => "Title (Z-A)", 
                            ];
                            foreach($orders as $key => $value) {
                                echo '<option value="' . $key . '">' . $value . '</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 mb-3">
                    <div class="mb-2 d-lg-block d-md-none" style="height: 24px;"></div>
                    <button class="btn btn-primary btn-mobile" data-click="search">Search</button>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <hr>
            <ol class="breadcrumb py-0">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item"><a href="?view=ejournals">E-journals</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $ejournal->ACCESSION_NO;?></li>
            </ol>
        </div>
        <div class="col-12">
            <p class="text-muted text-right mb-0">
                <i class="fas fa-chart-column"></i> 
                <span class="badge badge-info"><b><?php echo $views->unique; ?></b> unique view<?php echo $views->unique > 1 ? 's' : ''; ?></span> 
                <span class="badge badge-info"><b><?php echo $views->today; ?></b> view<?php echo $views->today > 1 ? 's' : ''; ?> today</span> 
            </p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-3">
            <div class="mt-3 mb-3 text-center">
                <img class="rounded" src="<?php echo $ejournal->COVER_SOURCE;?>" width="255" height="380">
            </div>
            <div class="mt-3 mb-3 text-center">
                <img class="rounded" src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=http://localhost/staging/cvsu_ils/?view=ebook&id=<?php echo $ejournal->ID;?>" height="150px" width="150px">
            </div>
            <div class="my-3">
                <?php
                    if(substr($ejournal->ACCESSION_NO, 0, 4) == 'EJP') {
                        echo '<a class="btn d-block btn-success" href="services.php?id=' . $ejournal->ID . '" style="border: 1px solid #1a722e; box-shadow: inset 0 -3px 0 0 #1a722e;" target="_blank">Request access</a>';
                        echo '<p class="mt-5 px-2 text-muted">Accessibility: <span class="badge badge-danger">Purchased</span></p>';
                    } else {
                        echo '<a class="btn d-block btn-success" href="' . $ejournal->LINK . '" style="border: 1px solid #1a722e; box-shadow: inset 0 -3px 0 0 #1a722e;" target="_blank">View full contents</a>';
                        echo '<p class="mt-5 px-2 text-muted">Accessibility: <span class="badge badge-success">Open Access</span></p>';
                    }
                ?>
                <!-- <p class="mt-5 px-2 text-muted">Added by: <span class="badge badge-primary"><?php echo $ejournal->CreatorName;?></span></p> -->
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-9">
            <div class="container pt-3 px-3">
                <div class="pb-3">
                    <?php
                        foreach($ejournal->CATEGORY as $category) {
                            echo '<span class="badge badge-primary">' . $category . '</span> ';
                        }
                    ?>
                    <h3><?php echo $ejournal->TITLE;?></h3>
                    <?php
                        if(!empty($ejournal->RELATORS)) {
                            echo '<p class="text-muted">';
                            $relator = '';
                            $i = 0;
                            foreach($ejournal->RELATORS as $relator) {
                                if($i == 0) {
                                    echo count($ejournal->RELATORS) > 1 ?  '[' . $relator->TYPE . 's] ' :  '['. $relator->TYPE . '] ';
                                }
                                echo $relator->NAME;
                                $i++;
                                echo $i != count($ejournal->RELATORS) ? ' -- ' : '';
                            }
                            echo '</p>';
                        }
                    ?>
                    <hr>
                    <h4>Details</h4>
                    <ul class="ils-details">
                        <li>
                            <span>Accession Number: </span>
                            <span><b><?php echo $ejournal->ACCESSION_NO;?></b></span>
                        </li>
                        <li>
                            <span>ISSN: </span>
                            <span><?php echo $ejournal->ISSN;?></span>
                        </li>
                        <li>
                            <span>Publisher: </span>
                            <span><?php echo $ejournal->PUBLISHER;?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const orderSelect = document.querySelector(['[data-select="order"]']);
    const searchInput = document.querySelector('[data-input="search"]');
    const searchBtn = document.querySelector('[data-click="search"]');

    searchBtn.addEventListener("click", (e) => {
        e.preventDefault();
        
        let params = (new URL(document.location)).searchParams;
        let view = params.get("view");
        let keyword = params.get("q");
        
        let redirectURL = "?view=" + view + "s";
        if(searchInput.value) {
            redirectURL = redirectURL + "&q=" + searchInput.value;
        }
        redirectURL = redirectURL + "&order=" + orderSelect.options[orderSelect.selectedIndex].value;

        searchBtn.setAttribute("disabled", "");
        window.location = redirectURL;
    });
</script>