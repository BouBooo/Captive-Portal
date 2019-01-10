<!DOCTYPE html>    
    <head>
        <title>Linux - Portail captif</title>
        <meta charset="UTF-8">
        <style>
            * {
            font-family: 'Open Sans', sans-serif;
            }

            body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            background: #111;
            background-repeat: no-repeat;
            }

            .signupSection {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 800px;
            height: 450px;
            text-align: center;
            display: flex;
            color: white;
            box-shadow: 3px 10px 20px 5px rgba(0, 0, 0, .5);
            }

            .info {
            width: 45%;
            background: rgba(20, 20, 20, .8);
            padding: 30px 0;
            border-right: 5px solid rgba(30, 30, 30, .8);
            h2 {
                padding-top: 30px;
                font-weight: 300;
            }
            p {
                font-size: 18px;
            }
            .icon {
                font-size: 8em;
                padding: 20px 0;
                color: rgba(10, 180, 180, 1);
            }
            }

            .signupForm {
            width: 70%;
            padding: 30px 0;
            background: rgba(20, 40, 40, .8);
            transition: .2s;
            h2 {
                font-weight: 300;
            }
            }

            .inputFields {
            margin: 15px 0;
            font-size: 16px;
            padding: 10px;
            width: 250px;
            border: 1px solid rgba(10, 180, 180, 1);
            border-top: none;
            border-left: none;
            border-right: none;
            background: rgba(20, 20, 20, .2);
            color: white;
            outline: none;
            }

            .noBullet {
            list-style-type: none;
            padding: 10;
            }

            #join-btn {
            border: 1px solid rgba(10, 180, 180, 1);
            background: rgba(20, 20, 20, .6);
            font-size: 18px;
            color: white;
            margin-top: 20px;
            padding: 10px 50px;
            cursor: pointer;
            transition: .4s;
            &:hover {
                background: rgba(20, 20, 20, .8);
                padding: 10px 80px;
            }
            }
         
            </style>
    </head>

    <body>
        
    <div class="signupSection">
    <form method="post" action="$PORTAL_ACTION$" class="signupForm" name="signupform">
            <h2>Sign In with Username Password</h2>
            <ul class="noBullet">
            <li>
                <label for="auth_user"></label>
                <input name="auth_user" type="text" class="inputFields" id="username" placeholder="Username" value="" required/>
            </li>
            <li>
                <label for="auth_pass"></label>
                <input type="password" class="inputFields" id="password" name="auth_pass" placeholder="Password" value="" required/>
            </li>
            <li id="center-btn">
                <input type="submit" id="join-btn" name="accept" alt="Join" value="Continue">
            </li>
            </ul>
        </form>
        <form method="post" action="$PORTAL_ACTION$" class="signupForm" name="signupform">
        <h2>Sign In with Voucher</h2>
            <ul class="noBullet">
            <li>
                <label for="auth_voucher"></label>
                <input name="auth_voucher" type="text" class="inputFields" id="voucher" placeholder="Voucher" value=""  required/>
            </li>
            <li>
                <br>
                <br>
                <br>
                <br>
            </li>
            <li id="center-btn">
                <input type="submit" id="join-btn" name="accept" alt="Join" value="Continue">
            </li>
            </ul>


        </form>


        </div>
    </body>
</html>
