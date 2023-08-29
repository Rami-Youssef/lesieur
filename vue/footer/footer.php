<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @font-face {
            font-family: "KG HAPPY Solid";
            src: url("fonts/KGHAPPYSolid.eot?") format("eot"), url("fonts/KGHAPPYSolid.woff") format("woff"), url("fonts/KGHAPPYSolid.ttf") format("truetype"), url("fonts/KGHAPPYSolid.svg#KGHAPPYSolid") format("svg");
            font-weight: normal;
            font-style: normal;
        }
        body {
            margin: 0px;
            font-family:"KG HAPPY Solid";
            font-size: 8px;
            
        }

        footer {
            background-color: #006547;
            color: #333333;
            padding: 60px 0;
        }

        footer h2 {
            color: #13493a;
            text-align: center;
            background-color: white;
        }

        .footer-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-logo img {
            height: 100%;
            width: auto;
        }

        .footer-contact h3 {
            color: white;
            margin-bottom: 20px;
        }

        .footer-contact p {
            color: #e7d9d9;
            margin: 0 10px 10px 0;
            font-size: 16px;
        }

        .footer-container h4 {
            color: rgb(190, 19, 19);
        }

        .footer-container hr {
            border: 1px solid rgb(175, 19, 19);
            height: 50px;
        }

        .socials-icons {
            height: 2em;
            width: 2em;
        }
    </style>
</head>

<body>
    <footer>
        <div>
            <h2>INFORMATION</h2>

            <div class="footer-container">
                <div class="footer-logo">
                    <svg version="1.1" id="svg1" width="127.2832" height="127.27343" viewBox="0 0 127.2832 127.27343"
                        xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                        <defs id="defs1" />
                        <g id="g1" transform="translate(-124.83565,165.21803)">
                            <path id="path9" style="display:inline;fill:#F5F5F5"
                                d="m 188.37276,-165.21804 -30.76758,31.10742 30.54102,29.79297 31.11914,-30.35352 z m 34.44726,34.0625 -31.09374,30.33008 30.05468,29.314453 30.33789,-30.675783 z m -68.73046,0.59961 -29.25391,29.57812 29.74024,29.406256 29.99218,-29.253916 z m 34.05664,33.220705 -30.01562,29.279291 30.45117,30.11133 29.68358,-30.01172 z" />
                        </g>
                    </svg>
                </div>
                <div class="footer-contact">
                    <h3>Contactez-nous :</h3>
                    <p>Rue Caporal Corbi</p>
                    <p>Maroc, Casablanca</p>
                    <p>Phone: (xxx) xxx-xxxx</p>
                    <p>Email: xxxx@Gmail.com</p>
                </div>
                <div class="footer-contact">
                    <h3>Suivez-nous :</h3>
                    <p> <a href="https://web.facebook.com/Lesieur.ma/?_rdc=1&_rdr"><img class="socials-icons"
                                src="facebook-icon.svg" alt="facebook-icon"></a></p>
                    <p> <a href="https://www.youtube.com/@lesieurmaroc5856"><img class="socials-icons"
                                src="youtube-icon.svg" alt="youtube-icon"></a></p>
                    <p> <a href="https://www.instagram.com/lesieurofficielmaroc/?hl=en"><img class="socials-icons"
                                src="instagram-icon.svg" alt="instagram-icon"></a></p>
                    <p><a href="https://www.linkedin.com/company/lesieur-cristal/"><img class="socials-icons"
                                src="linkedin-Icon.svg" alt="linkedin-Icon"></a></p>
                </div>
                <div class="footer-logo">

                    <img src="cristal.svg" alt="Logo">
                </div>
            </div>
    </footer>

</html>