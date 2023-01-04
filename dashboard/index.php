<?php
//$user = $_COOKIE['user'];
//if (!isset($user)){
//    header('Location: https://danielpekel.nl/login.php');
//}
//else{
//    echo "Welcome back, test";
//}
require_once '../header.php';
?>
    <div class="container-fluid bg-grey p-0 m-0">
        <div class="row m-0">
            <div class="col-2 rounded-end-5 vh-100 text-white d-none d-md-block bg-black">
                <div class="container pt-3">
                    <h5 class="fs-3">Welkom terug</h5>
                    <div class="row pt-2">
                        <div class="col-4"><img style="border-radius: 150px;" src="/assets/media/selfie.jpg"
                                                width="100%" height="auto"/></div>
                        <div class="col-8">
                            <div class="container py-4">
                                <h5 class="fs-6">Daniël Pekel</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="menuitem">
                        <a href="/dashboard.php">Dashboard</a>
                    </div>
                    <div class="menuitem">
                        <a href="/taken.php">Taken</a>
                    </div>
                    <div class="menuitem">
                        <a href="/contacten.php">Contacten</a>
                    </div>

                </div>
            </div>
            <div class="col-10">test</div>
        </div>
    </div>



<?php require_once '../footer.php'; ?>