<div class="container-xl mt-5">
    <div class="row ">
        <div class="col-md-12">
            <div class="row d-flex align-items-center pb-3">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <h1 class="text-left text-uppercase">E-journals</h1>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
                    <div class="mb-2 d-lg-block d-md-none" style="height: 24px;"></div>
                    <input class="form-control dropdown" type="text" placeholder="Search by Title or ISSN..." data-input="search" value="<?php echo $search;?>">
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 mb-3">
                    <label class="text-muted">Sort by</label>
                    <select class="form-control" data-select="order">
                        <?php
                            if($selectedOrder) {
                                $orders = [
                                    'newest' => "Newest to oldest",
                                    'oldest' => "Oldest to newest", 
                                    'title' => "Title (A-Z)", 
                                    'titleReverse' => "Title (Z-A)", 
                                ];
                                foreach($orders as $key => $value) {
                                    echo '<option value="' . $key . '" ' . ($selectedOrder == $key ? 'selected' : '') . '>' . $value . '</option>';
                                }
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
                <li class="breadcrumb-item active" aria-current="page">E-journals</li>
            </ol>
        </div>
        <div class="col-md-12">
            <div class="pt-3">
                <h3 class="mb-4">Total E-journal<?php echo ($count > 1 ? ('s: ' . $count) : (': ' . $count));?></h3>
                <?php
                    if($selectedCategory || $search) {
                        echo '<div><span class="font-weight-bold text-muted">Filtered with: </span>';
                        if($selectedCategory) {
                            $link = '?' . str_replace("&category=" . $selectedCategory->id, "", $_SERVER['QUERY_STRING']);
                            echo '<a class="badge badge-pill badge-primary" href="' . $link . '">' . $selectedCategory->name . ' <i class="fas fa-times"></i></a> ';
                        }
                        if($search) {
                            $link = '?' . str_replace("&q=" . $search, "", $_SERVER['QUERY_STRING']);
                            echo '<a class="badge badge-pill badge-primary" href="' . $link . '">' . $search . ' <i class="fas fa-times"></i></a> ';
                        }
                        echo '</div>';
                    }
                ?>
                <div class="row mt-4">
                    <div class="col-lg-3 col-md-12 d-lg-block d-md-none d-sm-none">
                        <div class="card">
                            <div class="card-header text-white ils-bg-green">
                                Categories
                            </div>
                            <ul class="list-group list-group-flush">
                                <?php
                                    foreach($categories as $category) {
                                        if($selectedCategory) {
                                            if($selectedCategory->id != $category->id) {
                                                echo '
                                                    <li class="list-group-item"><a href="?view=ejournals&category=' . $category->id . ($search ? '&q=' . $search : '') . ($selectedOrder ? '&order=' . $selectedOrder : '') . '">' . $category->name . '</a></li>
                                                ';
                                            }
                                        } else {
                                            echo '
                                                <li class="list-group-item"><a href="?view=ejournals&category=' . $category->id . ($search ? '&q=' . $search : '') . ($selectedOrder ? '&order=' . $selectedOrder : '') . '">' . $category->name . '</a></li>
                                            ';
                                        }
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <?php 
                            if($ejournals) {
                        ?>
                        <div class="row row-cols-1 row-cols-md-4">
                            <?php
                                foreach($ejournals as $ejournal) {
                                    $source = $ejournal->cover_source;
                                    if($ejournal->cover_type == 'DEFAULT') {
                                        $source = 'storage/images/modules/e-journals.jpg';
                                    } else if ($ejournal->cover_type == 'FILE') {
                                        $source = 'resources/images/covers/ejournals/open_access/' . $source;
                                    }
                                    // For GAD sake
                                    // <div class="corner-ribbon">
                                    //     <span class="cr-inner">
                                    //         <span class="cr-text">GAD</span>
                                    //     </span>
                                    // </div>
                                    echo '
                                        <div class="col mb-4">
                                            <a href="?view=ejournal&id=' . $ejournal->id . '">
                                                <div class="card h-100">
                                                    <img src="' . $source. '" class="card-img-top rounded" height="280px" style="object-fit: cover;">
                                                    <div class="card-body">
                                                        <h6 class="card-title overflow-hidden mb-2" data-toggle="tooltip" style="height: 84px;" title="' . $ejournal->title . '">' .$ejournal->title . '</h6>
                                                        <p class="pt-2 border-top card-text text-muted" style="font-size: .9rem;">' . $ejournal->category. '</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    ';
                                }
                            ?>
                        </div>
                        <div class="col-sm-12 col-md-12 px-0">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-end">
                                    <?php
                                        foreach($pages as $page) {
                                            switch($page->type) {
                                                case 'previous':
                                                    echo '
                                                        <li class="page-item ' . ($page->link ?? "disabled") . '"><a class="page-link" href="' . ($page->link ?? "javascript:void(0)") . '">Previous</a></li>
                                                    ';
                                                    break;
                                                case 'active':
                                                    echo '
                                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">' . $page->page . '</a></li>
                                                    ';
                                                    break;
                                                case 'default':
                                                    echo '
                                                        <li class="page-item"><a class="page-link" href="' . $page->link . '">' . $page->page . '</a></li>
                                                    ';
                                                    break;
                                                case 'next':
                                                    echo '
                                                        <li class="page-item ' . ($page->link ?? "disabled") . '"><a class="page-link" href="' . ($page->link ?? "javascript:void(0)") . '">Next</a></li>
                                                    ';
                                                    break;
                                            }
                                        }
                                    ?>
                                </ul>
                            </nav>
                        </div>
                        <?php
                            } else {
                        ?>
                        <h2>Page not found</h2>
                        <p>Page does not exists and had no contents.</p>
                        <a class="btn btn-primary" href="?view=ejournals">Return to e-journals</a>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
	$(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    const orderSelect = document.querySelector(['[data-select="order"]']);
    const searchInput = document.querySelector('[data-input="search"]');
    const searchBtn = document.querySelector('[data-click="search"]');

    searchBtn.addEventListener("click", (e) => {
        e.preventDefault();
        
        let params = (new URL(document.location)).searchParams;
        let view = params.get("view");
        let keyword = params.get("q");
        let category = params.get("category");
        
        let redirectURL = "?view=" + view;
        if(searchInput.value) {
            redirectURL = redirectURL + "&q=" + searchInput.value;
        }
        if(category) {
            redirectURL = redirectURL + "&category=" + category;
        }
        redirectURL = redirectURL + "&order=" + orderSelect.options[orderSelect.selectedIndex].value;

        searchBtn.setAttribute("disabled", "");
        window.location = redirectURL;
    });
</script>