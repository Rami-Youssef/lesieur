<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,body{
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden; 
            font-family: 'Trebuchet MS', sans-serif;
        }
        nav{
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            background-color: #006547;
            height: 100px;
            opacity: 1;
            overflow: hidden;
        }
        .slash{
            color: white;
            font-size: 20px;
        }
        .Menu{
            width: 20%;
            display: flex;
            justify-content: space-between ;
        }
        .image img{
            width: 50%;
        }
        @keyframes rotation {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
}
        /*.image svg:hover{
            animation: rotation 2s  linear;
        }*/
        .sign{
            width: 20%;
            display: flex;
            justify-content: space-between ;
        }
       
        nav a{
            font-size: 20px;
            color: white;
            text-decoration: none;
            position: relative;
        }

        nav a::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -5px; /* Adjust this value for space between word and line */
        width: 0;
        height: 2px; /* Adjust the height of the underline */
        background-color: white;
        transition: width 0.3s; /* Smooth transition for width change */
        opacity: 0; /* Initially hidden */
        }

        nav a:hover::after {
        width: 100%; /* Expand the underline on hover */
        opacity: 1; /* Show the underline on hover */
        }

    </style>
</head>
<body>
    <nav>
        <div class="Menu">
            <a href="">Catalog</a>
        </div>
        <div class="image" >
            <a href=""><svg
   version="1.1"
   id="svg1"
   width="127.2832"
   height="127.27343"
   viewBox="0 0 127.2832 127.27343"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:svg="http://www.w3.org/2000/svg">
  <defs
     id="defs1" />
  <g
     id="g1"
     transform="translate(-124.83565,165.21803)">
    <path
       id="path9"
       style="display:inline;fill:#ffffff"
       d="m 188.37276,-165.21804 -30.76758,31.10742 30.54102,29.79297 31.11914,-30.35352 z m 34.44726,34.0625 -31.09374,30.33008 30.05468,29.314453 30.33789,-30.675783 z m -68.73046,0.59961 -29.25391,29.57812 29.74024,29.406256 29.99218,-29.253916 z m 34.05664,33.220705 -30.01562,29.279291 30.45117,30.11133 29.68358,-30.01172 z" />
  </g>
</svg></a>
        </div>
        <div class="sign">
            <a href="">Sign-In</a>
            <a href="">Sign-Up</a>
        </div>
    </nav>
</body>
</html>