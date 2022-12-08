<div id="backDrop"></div>
<div id="menu-wrapper">
    <div id="menu">
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
            <a href="#">
                Study List
                <img src="./Asset/Icon/next.png" alt="RightArrow">
            </a>
        </div>
    </div>
</div>

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
        align-items: center;
        display: flex;
        position: absolute;
        left: 0px;
        top: 0px;
        color: #03353C;
        font-family: boldp;
    }

    #menu{
        background-color: white;
        z-index: 3;
    }

    #menu-header{
        align-items: center;
        display: flex;
    }

    #menud-header:hover ~ #menu ~ #menu-wrapper #backDrop{
        display: block !important;
    }

    #menu-list{
        display: flex;
        flex-direction: column;
        padding: 1vw;
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
