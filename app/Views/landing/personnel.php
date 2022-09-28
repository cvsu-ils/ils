<div class="container p-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="p-3 mb-3 rounded text-uppercase ils-bg-green text-white text-center">Library Personnel</h2>
            <h5 class="mb-3 rounded font-weight-bold">CvSU - Main Campus Library</h5>
            <div class="card-deck justify-content-center">
                <?php
                    $data = array(
                        array('avatar' => 'storage/images/personnels/main/Princess - Head.jpg', 'name' => 'Princess N. Roderno, RL, MLIS', 'position' => 'Head, University Library'),
                        array('avatar' => 'storage/images/personnels/main/Nimfa.jpg', 'name' => 'Nimphas E. Javier, RL, MLIS', 'position' => 'In-Charge, Technical Services, Reference, and Reserve Sections'),
                        array('avatar' => 'storage/images/personnels/main/Nikka.jpg', 'name' => 'Veronica L. De Villa, RL', 'position' => 'In-Charge, Filipiniana & Periodicals Sections, Public Information Officer, & Gender & Development Coordinator'),
                        array('avatar' => 'storage/images/personnels/main/Kristine.jpg', 'name' => 'Kristine M. Mojica, RL, MLIS', 'position' => 'In-Charge, Theses Section'),
                    );
                    foreach($data as $personnel) {
                        echo '
                            <div class="card shadow-sm">
                                <img src="' . $personnel['avatar'] . '" alt="' . $personnel['name'] . ' - ' . $personnel['position'] . '">
                                <div class="card-body">
                                    <h6 class="card-title">' . $personnel['name'] . '</h6>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">' . $personnel['position'] . '</small>
                                </div>
                            </div>
                        ';
                    }
                ?>
            </div>
            <br>
            <div class="card-deck justify-content-center">
                <?php
                    $data = array(
                        array('avatar' => 'storage/images/personnels/main/Jayvee.jpg', 'name' => 'John Vincent J. Bonza', 'position' => 'Computer Programmer for Online Library Section'),
                        array('avatar' => 'storage/images/personnels/main/Erwin.jpg', 'name' => 'Erwin C. Rupido', 'position' => 'Library Assistant for Multimedia Section'),
                        array('avatar' => 'storage/images/personnels/main/Polay.jpg', 'name' => 'Paloma A. Vida, MLIS', 'position' => 'Library Assistant for Electronic Resources Section'),
                        array('avatar' => 'storage/images/personnels/main/Verna.jpg', 'name' => 'Verna S. Barizo', 'position' => 'Library Assistant for Filipiniana and Periodicals Sections'),
                    );
                    foreach($data as $personnel) {
                        echo '
                            <div class="card shadow-sm">
                                <img src="' . $personnel['avatar'] . '" alt="' . $personnel['name'] . ' - ' . $personnel['position'] . '">
                                <div class="card-body">
                                    <h6 class="card-title">' . $personnel['name'] . '</h6>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">' . $personnel['position'] . '</small>
                                </div>
                            </div>
                        ';
                    }
                ?>
            </div>
            <br>
            <div class="card-deck justify-content-center">
                <?php
                    $data = array(
                        array('avatar' => 'storage/images/personnels/main/Jane.jpg', 'name' => 'Jane G. Crisostomo', 'position' => 'Library Assistant for Reference and Reserve Sections'),
                        array('avatar' => 'storage/images/personnels/main/Bernard.jpg', 'name' => 'Bernard Gil C. Crystal', 'position' => 'Library Assistant for Online Library & Accreditation Sections'),
                        array('avatar' => 'storage/images/personnels/main/Erlyn.jpg', 'name' => 'Erlyn P. Dilidili', 'position' => 'Library Assistant for Theses Section'),
                        array('avatar' => 'storage/images/personnels/main/Lei.jpg', 'name' => 'Liecelle A. Floralde', 'position' => 'Library Assistant for Theses Section'),
                    );
                    foreach($data as $personnel) {
                        echo '
                            <div class="card shadow-sm">
                                <img src="' . $personnel['avatar'] . '" alt="' . $personnel['name'] . ' - ' . $personnel['position'] . '">
                                <div class="card-body">
                                    <h6 class="card-title">' . $personnel['name'] . '</h6>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">' . $personnel['position'] . '</small>
                                </div>
                            </div>
                        ';
                    }
                ?>
            </div>
            <br>
            <div class="card-deck justify-content-center">
                <?php
                    $data = array(
                        array('avatar' => 'storage/images/personnels/main/Cecil.jpg', 'name' => 'Ma. Cecilia C. Quiñones', 'position' => '
                        Library Assistant for Circulation Section, Property Custodian, and Unit Inspector'),
                        array('avatar' => 'storage/images/personnels/main/Roselle.jpg', 'name' => 'Ana Rosel M. Rupido, MBA', 'position' => 'Library Assistant for Circulation Section'),
                        array('avatar' => 'storage/images/personnels/main/Keith.jpg', 'name' => 'Keith Anne B. Vicedo', 'position' => 'Library Assistant for Technical Services, Reference and Reserve Sections'),
                        array('avatar' => 'storage/images/personnels/main/Lyka.jpg', 'name' => 'Maharlika L. Villa', 'position' => 'Secretary, Unit Canvasser, and Liaison Officer'),
                    );
                    foreach($data as $personnel) {
                        echo '
                            <div class="card shadow-sm">
                                <img src="' . $personnel['avatar'] . '" alt="' . $personnel['name'] . ' - ' . $personnel['position'] . '">
                                <div class="card-body">
                                    <h6 class="card-title">' . $personnel['name'] . '</h6>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">' . $personnel['position'] . '</small>
                                </div>
                            </div>
                        ';
                    }
                ?>
            </div>
            <br>
            <hr>

            <h5 class="mb-3 rounded font-weight-bold">CvSU - Bacoor City Campus Library</h5>
            <div class="card-deck">
                <?php
                    $data = array(
                        array('avatar' => 'storage/images/personnels/default.png', 'name' => 'Lorema N. Acapulco, RL', 'position' => 'Campus Librarian'),
                        array('avatar' => 'storage/images/personnels/default.png', 'name' => 'Russel C. Cacho', 'position' => 'Library Assistant')
                    );
                    foreach($data as $personnel) {
                        echo '
                            <div class="col-md-3 p-0 m-0">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <h6 class="card-title">' . $personnel['name'] . '</h6>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">' . $personnel['position'] . '</small>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                ?>
            </div>
            <br>
            <hr>
            
            <h5 class="mb-3 rounded font-weight-bold">CvSU - CCAT Campus Library</h5>
            <div class="card-deck">
                <?php
                    $data = array(
                        array('avatar' => 'storage/images/personnels/ccat/dan-marie-f-navarrete.png', 'name' => 'Dan Marie F. Navarrete, RL, MLIS', 'position' => 'Campus Librarian'),
                        array('avatar' => 'storage/images/personnels/ccat/kathy-a-padre.png', 'name' => 'Kathy A. Padre, RL', 'position' => 'Assistant Campus Librarian'),
                        array('avatar' => 'storage/images/personnels/ccat/sharon-p-pillos.png', 'name' => 'Sharon S. Pillos', 'position' => 'Library Assistant'),
                        array('avatar' => 'storage/images/personnels/ccat/judith-b-labrador.png', 'name' => 'Judith B. Labrador', 'position' => 'Library Assistant')
                    );
                    foreach($data as $personnel) {
                        echo '
                            <div class="col-md-3 p-0 m-0">
                                <div class="card shadow-sm">
                                    <img src="' . $personnel['avatar'] . '" alt="' . $personnel['name'] . ' - ' . $personnel['position'] . '">
                                    <div class="card-body">
                                        <h6 class="card-title">' . $personnel['name'] . '</h6>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">' . $personnel['position'] . '</small>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                ?>
            </div>
            <br>
            <div class="card-deck">
                <?php
                    $personnel = array('avatar' => 'storage/images/personnels/ccat/ronnel-s-araracap.png', 'name' => 'Ronnel S. Araracap', 'position' => 'Library Assistant');
                    echo '
                        <div class="col-md-3 p-0 m-0">
                            <div class="card shadow-sm">
                                <img src="' . $personnel['avatar'] . '" alt="' . $personnel['name'] . ' - ' . $personnel['position'] . '">
                                <div class="card-body">
                                    <h6 class="card-title">' . $personnel['name'] . '</h6>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">' . $personnel['position'] . '</small>
                                </div>
                            </div>
                        </div>
                    ';
                ?>
            </div>
            <br>
            <hr>

            <h5 class="mb-3 rounded font-weight-bold">CvSU - Carmona Campus Library</h5>
            <div class="card-deck">
                <?php
                    $data = array(
                        array('avatar' => 'storage/images/personnels/default.png', 'name' => 'Carl Anthony B. Alora, RL, MLIS', 'position' => 'Campus Librarian'),
                        array('avatar' => 'storage/images/personnels/default.png', 'name' => 'Brendalyn O. Guinoban', 'position' => 'Library Assistant')
                    );
                    foreach($data as $personnel) {
                        echo '
                            <div class="col-md-3 p-0 m-0">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <h6 class="card-title">' . $personnel['name'] . '</h6>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">' . $personnel['position'] . '</small>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                ?>
            </div>
            <br>
            <hr>

            <h5 class="mb-3 rounded font-weight-bold">CvSU - Cavite City Campus Library</h5>
            <div class="card-deck">
                <?php
                    $data = array(
                        array('avatar' => 'storage/images/personnels/default.png', 'name' => 'Marcela Lean M. Espiritu, RL, Maed-LIS', 'position' => 'Campus Librarian'),
                        array('avatar' => 'storage/images/personnels/default.png', 'name' => 'Editha A. Saria', 'position' => 'Library Assistant')
                    );
                    foreach($data as $personnel) {
                        echo '
                            <div class="col-md-3 p-0 m-0">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <h6 class="card-title">' . $personnel['name'] . '</h6>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">' . $personnel['position'] . '</small>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                ?>
            </div>
            <br>
            <hr>

            <h5 class="mb-3 rounded font-weight-bold">CvSU - General Trias City Campus Library</h5>
            <div class="card-deck">
                <?php
                    $data = array(
                        array('avatar' => 'storage/images/personnels/general-trias-city/pauline-anne-p-estrada.jpg', 'name' => 'Pauline Anne P. Estrada, RL', 'position' => 'Campus Librarian')
                    );
                    foreach($data as $personnel) {
                        echo '
                            <div class="col-md-3 p-0 m-0">
                                <div class="card shadow-sm">
                                    <img src="' . $personnel['avatar'] . '" alt="' . $personnel['name'] . ' - ' . $personnel['position'] . '">
                                    <div class="card-body">
                                        <h6 class="card-title">' . $personnel['name'] . '</h6>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">' . $personnel['position'] . '</small>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                ?>
            </div>
            <br>
            <hr>

            <h5 class="mb-3 rounded font-weight-bold">CvSU - Imus City Campus Library</h5>
            <div class="card-deck">
                <?php
                    $data = array(
                        array('avatar' => 'storage/images/personnels/default.png', 'name' => 'Marvie Joy R. Sostino, RL', 'position' => 'Campus Librarian'),
                        array('avatar' => 'storage/images/personnels/default.png', 'name' => 'Maria Teresa R. Malayao', 'position' => 'Library Assistant'),
                        array('avatar' => 'storage/images/personnels/default.png', 'name' => 'Jonathan A. Diño', 'position' => 'Library Assistant')
                    );
                    foreach($data as $personnel) {
                        echo '
                            <div class="col-md-3 p-0 m-0">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <h6 class="card-title">' . $personnel['name'] . '</h6>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">' . $personnel['position'] . '</small>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                ?>
            </div>
            <br>
            <hr>

            <h5 class="mb-3 rounded font-weight-bold">CvSU - Naic Campus Library</h5>
            <div class="card-deck">
                <?php
                    $data = array(
                        array('avatar' => 'storage/images/personnels/default.png', 'name' => 'Rien Rose V. Salvador, RL, MLIS', 'position' => 'Campus Librarian')
                    );
                    foreach($data as $personnel) {
                        echo '
                            <div class="col-md-3 p-0 m-0">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <h6 class="card-title">' . $personnel['name'] . '</h6>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">' . $personnel['position'] . '</small>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                ?>
            </div>
            <br>
            <hr>

            <h5 class="mb-3 rounded font-weight-bold">CvSU - Silang Campus Library</h5>
            <div class="card-deck">
                <?php
                    $data = array(
                        array('avatar' => 'storage/images/personnels/default.png', 'name' => 'Prudencio P. Rosales Jr., RL', 'position' => 'Campus Librarian')
                    );
                    foreach($data as $personnel) {
                        echo '
                            <div class="col-md-3 p-0 m-0">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <h6 class="card-title">' . $personnel['name'] . '</h6>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">' . $personnel['position'] . '</small>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                ?>
            </div>
            <br>
            <hr>

            <h5 class="mb-3 rounded font-weight-bold">CvSU - Tanza Campus Library</h5>
            <div class="card-deck">
                <?php
                    $data = array(
                        array('avatar' => 'storage/images/personnels/default.png', 'name' => 'Roselyn Cea Baltar, RL', 'position' => 'Campus Librarian')
                    );
                    foreach($data as $personnel) {
                        echo '
                            <div class="col-md-3 p-0 m-0">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <h6 class="card-title">' . $personnel['name'] . '</h6>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">' . $personnel['position'] . '</small>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                ?>
            </div>
            <br>
            <hr>

            <h5 class="mb-3 rounded font-weight-bold">CvSU - Trece Martires City Campus Library</h5>
            <div class="card-deck">
                <?php
                    $data = array(
                        array('avatar' => 'storage/images/personnels/default.png', 'name' => 'Loran Camille V. Sara, RL', 'position' => 'Campus Librarian'),
                        array('avatar' => 'storage/images/personnels/default.png', 'name' => 'Rona Zaira S. Delos Santos', 'position' => 'Library Assistant')
                    );
                    foreach($data as $personnel) {
                        echo '
                            <div class="col-md-3 p-0 m-0">
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <h6 class="card-title">' . $personnel['name'] . '</h6>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">' . $personnel['position'] . '</small>
                                    </div>
                                </div>
                            </div>
                        ';
                    }
                ?>
            </div>
            <br>
            <hr>
        </div>
    </div>
</div>