<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SUBLIME | LOGIN </title>
    <style>
        body {
            background: #242424;
        }

        .box {
            padding: 15px
        }

        .box a {
            color: #EFEFEF;
            font-size: 20px
        }

        .container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .form_container {
            width: fit-content;
            height: fit-content;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 15px;
            padding: 50px 40px 20px 40px;
            background-color: #363636;
            box-shadow: 0px 106px 42px rgba(0, 0, 0, 0.01),
                0px 59px 36px rgba(0, 0, 0, 0.05), 0px 26px 26px rgba(0, 0, 0, 0.09),
                0px 7px 15px rgba(0, 0, 0, 0.1), 0px 0px 0px rgba(0, 0, 0, 0.1);
            border-radius: 11px;
            font-family: "Inter", sans-serif;
        }


        .title_container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .title {
            margin: 0;
            font-size: 1.25rem;
            font-weight: 700;
            color: #ffffff;
        }

        .subtitle {
            font-size: 0.725rem;
            max-width: 80%;
            text-align: center;
            line-height: 1.1rem;
            color: #8B8E98
        }

        .input_container {
            width: 100%;
            height: fit-content;
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .icon {
            width: 20px;
            position: absolute;
            z-index: 99;
            left: 12px;
            bottom: 9px;
        }

        .input_label {
            font-size: 0.75rem;
            color: #b3b6bd;
            font-weight: 600;
        }

        .input_field {
            width: auto;
            height: 40px;
            padding: 0 0 0 40px;
            border-radius: 7px;
            outline: none;
            border: 1px solid #115DFC;
            filter: drop-shadow(0px 1px 0px #efefef) drop-shadow(0px 1px 0.5px rgba(239, 239, 239, 0.5));
            transition: all 0.3s cubic-bezier(0.15, 0.83, 0.66, 1);
        }

        .input_field:focus {
            border: 1px solid transparent;
            box-shadow: 0px 0px 0px 2px #242424;
            background-color: transparent;
        }

        .sign-in_btn {
            width: 100%;
            height: 40px;
            border: 0;
            background: #115DFC;
            border-radius: 7px;
            outline: none;
            color: #ffffff;
            cursor: pointer;
        }

        .sign-in_ggl {
            width: 100%;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background: #ffffff;
            border-radius: 7px;
            outline: none;
            color: #242424;
            border: 1px solid #e5e5e5;
            filter: drop-shadow(0px 1px 0px #efefef) drop-shadow(0px 1px 0.5px rgba(239, 239, 239, 0.5));
            cursor: pointer;
        }

        .sign-in_apl {
            width: 100%;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background: #212121;
            border-radius: 7px;
            outline: none;
            color: #ffffff;
            border: 1px solid #e5e5e5;
            filter: drop-shadow(0px 1px 0px #efefef) drop-shadow(0px 1px 0.5px rgba(239, 239, 239, 0.5));
            cursor: pointer;
        }

        .separator {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 30px;
            color: #8B8E98;
        }

        .separator .line {
            display: block;
            width: 100%;
            height: 1px;
            border: 0;
            background-color: #e8e8e8;
        }

        .note {
            font-size: 0.75rem;
            color: #8B8E98;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="box">
        <a href="{{ url('/') }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path
                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
            </svg></a>
    </div>
    <div class="container">
        <form action="{{ url('auth') }}" method="POST" class="form_container">
            @csrf
            <div class="logo_container">
                <img src="{{ url('sublime/images/S-removebg-preview.png') }}" alt="" width="200"
                    height="80" style="padding: 10px">
            </div>
            <div class="title_container">
                <p class="title">Forgot password</p>
                <span class="subtitle">Get started with our app, just create an account and enjoy the experience.</span>
            </div>
            <br>
            <div class="input_container">
                <label class="input_label" for="email_field">Email</label>
                <svg fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg"
                    class="icon">
                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#141B34"
                        d="M7 8.5L9.94202 10.2394C11.6572 11.2535 12.3428 11.2535 14.058 10.2394L17 8.5"></path>
                    <path stroke-linejoin="round" stroke-width="1.5" stroke="#141B34"
                        d="M2.01577 13.4756C2.08114 16.5412 2.11383 18.0739 3.24496 19.2094C4.37608 20.3448 5.95033 20.3843 9.09883 20.4634C11.0393 20.5122 12.9607 20.5122 14.9012 20.4634C18.0497 20.3843 19.6239 20.3448 20.7551 19.2094C21.8862 18.0739 21.9189 16.5412 21.9842 13.4756C22.0053 12.4899 22.0053 11.5101 21.9842 10.5244C21.9189 7.45886 21.8862 5.92609 20.7551 4.79066C19.6239 3.65523 18.0497 3.61568 14.9012 3.53657C12.9607 3.48781 11.0393 3.48781 9.09882 3.53656C5.95033 3.61566 4.37608 3.65521 3.24495 4.79065C2.11382 5.92608 2.08114 7.45885 2.01576 10.5244C1.99474 11.5101 1.99475 12.4899 2.01577 13.4756Z">
                    </path>
                </svg>
                <input placeholder="name@mail.com" title="Inpit title" name="email" type="text" class="input_field"
                    id="email_field">
            </div>
            <button title="Sign In" type="submit" class="sign-in_btn">
                <span>Send</span>
            </button>
            <a href="{{ url('auth') }}" class="note">back</a>
        </form>
    </div>
</body>

</html>
