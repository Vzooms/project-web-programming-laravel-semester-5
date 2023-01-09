<div id="menu-wrapper">
    <div id="menu-header">
        <img src="./Asset/Image/logo.png" width="50px" alt="laraStrap Icon">
        <h3>LaraStrap</h3>
    </div>
    <div id="menu-list">
        <a class="underline" href="/">
            Home
            <img src="./Asset/Icon/next.png" alt="RightArrow">
        </a>
        <a class="underline" href="#">
            Course
            <img src="./Asset/Icon/next.png" alt="RightArrow">
        </a>
        @auth
            <a class="underline" href="/studyList">
                Study List
                <img src="./Asset/Icon/next.png" alt="RightArrow">
            </a>
            <a class="underline" href="/profile">
                Profile
                <img src="./Asset/Icon/next.png" alt="RightArrow">
            </a>
        @endauth
    </div>
</div>
<div id="backDrop"></div>

<style>
    #backDrop {
        z-index: 1;
        height: 100vh;
        width: 100%;
        position: absolute;
        background-color: rgba(0, 0, 0, 0.5);
        display: none;
    }

    #menu-wrapper{
        z-index: 1;
        display: flex;
        flex-direction: column;
        position: absolute;
        left: 0px;
        top: 0px;
        color: #03353C;
        font-family: boldp;
        z-index: 3;
    }

    #menu-wrapper:hover{
        background-color: white;
    }

    #menu-wrapper:hover ~ #backDrop{
        display: block !important;
    }

    #menu-header{
        align-items: center;
        display: flex;
    }

    #menu-header:hover ~ #menu-list{
        background-color: white;
        display: block !important;
    }

    #menu-list{
        display: none;
        flex-direction: column;
        padding: 1vw;
    }

    #menu-list:hover{
        background-color: white;
        display: block !important;
    }

    #menu-list:hover{
        display: flex;
    }

    #menu-list a{
        width: 10vw;
        color: #03353C;
        font-family: regularp;
        display: flex;
        justify-content: space-between;
        margin-top: 1vh;
        align-items: center;
    }

    #menu-list a img{
        width: 25px;
    }

    .underline{
        border-bottom: 1px solid black;
        padding-bottom: 1vh;
    }
</style>
