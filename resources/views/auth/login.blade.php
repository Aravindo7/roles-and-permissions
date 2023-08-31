<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        @font-face {
            font-family: "NexaRustSans-Trial-Black2";
            src: url("public/fonts/NexaRustSans-Trial-Black2.ttf") format("truetype");
        }

        @font-face {
            font-family: "MADE TOMMY Medium_PERSONAL USE";
            src: url("public/fonts/MADE TOMMY Medium_PERSONAL USE.otf") format("truetype");
        }

        /* css styles for background image */
        #bac {
            background-image: url('{{url("public/img/login.jpg")}}');
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
        }

        /* css styles for assign the input center */
        .ron-container {
            display: flex;
            justify-content: center;
            /* Center horizontally */
            align-items: center;
            /* Center vertically */
            height: 100vh;
            /* Adjust the container's height as needed */
        }

        /* css styles for glass effect */
        .glass {
            background: rgba(30, 30, 30, 0.2);
            border-radius: 10px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            border: 2px solid #898989;
            width: 42%;
            height: 300px;
        }

        .form-floating>label {
            padding: 8px;
        }

        .kam {
            display: flex;
            justify-content: center;
        }

        .fu {
            height: 12px !important;
            width: 500px !important;
        }

        .form-floating>.form-control,
        .form-floating>.form-control-plaintext,
        .form-floating>.form-select {
            min-height: 40px;
        }

        /* css styles for button */
        .su {
            background-color: #ff8201;
            width: 200px;
            font-family: "NexaRustSans-Trial-Black2", sans-serif;
            font-size: 16px;
            color: #060606;
        }

        /* Apply the font to specific elements */
        .fe {
            font-family: "NexaRustSans-Trial-Black2", sans-serif;
            color: #151515;
            font-size: 27px;
            margin-top: 20px;
        }

        label {
            font-family: "MADE TOMMY Medium_PERSONAL USE", sans-serif;
            font-size: 12px;
            font-weight: 100;
        }

        /* media queries */
        @media only screen and (max-width: 1024px) {
            .kam {
                text-align: unset;
                display: unset;
                justify-content: unset;
            }

            .fu {
                width: 400px !important;
            }
        }

        @media only screen and (max-width: 768px) {
            .glass {
                height: 280px;
            }

            .fu {
                height: 12px !important;
                width: 300px !important;
            }

            .kam {
                text-align: center;
                display: flex;
                justify-content: center;
            }

            .su {
                background-color: #ff8201;
                width: 149px;
                height: 31px;
                font-family: "NexaRustSans-Trial-Black2", sans-serif;
                font-size: 12px;
                color: #060606;
            }

            .fe {
                font-size: 23px;
            }

            label {
                font-size: 10px;
                font-weight: 100;
            }
        }

        @media only screen and (min-width: 375px) and (max-width: 425px) {
            .fe {
                font-size: 12px;
            }

            .fu {
                height: 12px !important;
                width: 207px !important;
            }

            .kam {
                text-align: center;
                display: flex;
                justify-content: center;
            }

            .su {
                background-color: #ff8201;
                width: 100px;
                height: 25px;
                font-family: "NexaRustSans-Trial-Black2", sans-serif;
                font-size: 10px;
                color: #060606;
            }

            .form-floating>.form-control,
            .form-floating>.form-control-plaintext,
            .form-floating>.form-select {
                min-height: 23px;
            }

            .glass {
                height: 260px;
                width: 65%;
            }
        }

        @media only screen and (max-width: 320px) {
            .fe {
                font-size: 12px;
            }

            .kam {
                text-align: center;
                display: flex;
                justify-content: center;
            }

            .fu {
                height: 12px !important;
                width: 170px !important;
            }

            .su {
                background-color: #ff8201;
                width: 100px;
                height: 25px;
                font-family: "NexaRustSans-Trial-Black2", sans-serif;
                font-size: 10px;
                color: #060606;
            }

            .form-floating>.form-control,
            .form-floating>.form-control-plaintext,
            .form-floating>.form-select {
                min-height: 23px;
            }

            .glass {
                height: 250px;
                width: 70%;
            }
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css" />
</head>

<body>
    <div id="bac">
        <div class="ron-container">
            <div class="glass">
                <div class="container mt-3">
                    <center>
                        <h1 class="fe">Login Form</h1>
                    </center>
                    <br />
                    <div class="kam">
                        <form action="{{ route('login') }}" method="POST" autocomplete="off">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control fu" name="email" id="floatingInput" placeholder="name@example.com" />
                                <label for="floatingInput">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control fu" name="password" placeholder="name@example.com" />
                                <label for="floatingInput">Password</label>
                            </div>

                            <!-- <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>
            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>  -->
                            <center>
                                <button type="submit" class="btn btn-warning su">
                                    Submit
                                </button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {
        $("#number").on("input", function(e) {
            $(this).val(
                $(this)
                .val()
                .replace(/[^0-9]/g, "")
            );
        });
        $("#text").on("input", function(e) {
            $(this).val(
                $(this)
                .val()
                .replace(/[^a-z A-Z]/g, "")
            );
        });
    });
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
@if(session('success'))
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Display toast notification using Toastify
        Toastify({
            text: "{{ session('success') }}",
            className: "success",
            style: {
                background: "linear-gradient(to right, #00b09b, #96c93d)",
            },
        }).showToast();
    });
</script>
@endif

</html>