<?php
if (isset($_POST["capnhat"])) {
    $err = [];
    if (empty($_POST["user"])) {
        $err["user"] = "Không được để trống username";
    } else {
        $user = $_POST["user"];
    }
    if (empty($_POST["email"])) {
        $err["email"] = "Không được để trống ô Email";
    } else {
        $email = $_POST["email"];
    }
    if (empty($_POST["address"])) {
        $err["address"] = "Không được để trống ô địa chi";
    } else {
        $address = $_POST["address"];
    }

    if (empty($_POST["pass"])) {
        $err["pass"] = "Không được để trống ô Password";
    } else {
        $check = "/^[A-Z]){1}([\ư_\.!@#$%^&*()]+){5,31}$/";
        if ($_POST["pass"] != $check) {
            $err["pass"] = "Password không đúng định dạng";
        } else {
            $pass = $_POST["pass"];
        }
    }
    if (empty($_POST["tel"])) {
        $err["tel"] = "Không được để trống ô phone number";
    } else {
        $tel = $_POST["tel"];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="view/css/formdangki.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<style>
    body {
        background-size: 100%;
    }
</style>

<body>
    <div class="all">
        <div class="container my-5 py-5 z-depth-1">


            <!--Section: Content-->
            <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">


                <!--Grid row-->
                <div class="row d-flex justify-content-center">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <?php
                        if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                            extract($_SESSION['user']); //Nếu đối tượng là mảng thì phải extract

                        }
                        ?>

                        <!-- Default form register -->
                        <form class="text-center" action="index.php?act=edit_taikhoan" method="post">

                            <p class="h4 mb-4">Cập nhật tài khoản</p>

                            <div class="form-row mb-4">
                                <div class="col">
                                    <!-- username -->
                                    <input type="text" name="user" id="defaultRegisterFormFirstName" class="form-control" placeholder="Username" value="<?= $user ?>">
                                    <span><?php if (!empty($err["user"])) echo $err["user"] ?></span><br>
                                </div>
                                <br>
                                <div class="col">
                                    <!-- địa chỉ-->
                                    <input type="text" name="address" value="<?= $address ?>" id="defaultRegisterFormLastName" class="form-control" placeholder="Address">
                                    <span><?php if (!empty($err["address"])) echo $err["address"] ?></span><br>
                                </div>
                            </div>

                            <!-- E-mail -->
                            <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" name="email" value="<?= $email ?>">
                            <span><?php if (!empty($err["email"])) echo $err["email"] ?></span><br>

                            <!-- Password -->
                            <input type="password" name="pass" value="<?= $pass ?>" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                            <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                                <span><?php if (!empty($err["pass"])) echo $err["pass"] ?></span><br>
                                ít nhất 8 kí tự
                            </small>

                            <!-- Phone number -->
                            <input type="number" name="tel" value="<?= $tel ?>" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
                            <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                                Optional - for two step authentication
                            </small>

                            <!-- Newsletter -->
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">
                                <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our
                                    newsletter</label>
                            </div>

                            <!-- Sign up button -->
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <button class="btn btn-info my-4 btn-block" name="capnhat" type="submit" value="Cập nhật"><a href="index.php?act=dangnhap" style="text-decoration: none; color:black;"> Cập nhật
                                </a></button>

                            <button class="btn btn-info my-4 btn-block" type="submit"><a style="text-decoration: none; color:black;" href="index.php?act=dangnhap"> Đăng
                                    nhập</a></button>
                            
                            <!-- Social register -->
                            <p>or sign up with:</p>

                            <a href="#" class="mx-1" role="button"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="mx-1" role="button"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="mx-1" role="button"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="mx-1" role="button"><i class="fab fa-github"></i></a>

                            <hr>

                            <!-- Terms of service -->
                            <p>By clicking
                                <em> Sign up</em> you agree to our
                                <a href="" target="_blank">terms of service</a>
                        </form>
                        <!-- Default form register -->
                        <!-- Thông báo -->


                    </div>

                    <!--Grid column-->

                </div>
                <!--Grid row-->


            </section>
            <!--Section: Content-->


        </div>
    </div>
</body>

</html>