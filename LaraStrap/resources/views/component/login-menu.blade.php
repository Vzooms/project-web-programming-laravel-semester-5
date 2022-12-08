<div id="backDrop"></div>
<div id="menu-wrapper">
    <div id="menu">
        <div id="menu-header">
            <img src="./Asset/logo.png" width="50px" alt="">
            <h3>LaraStrap</h3>
        </div>
        <div id="menu-list">
            <a href="/">
                Home
                <img src="" alt="RightArrow">
            </a>
            <a href="#">
                Course
                <img src="" alt="RightArrow">
            </a>
            <a href="#">
                Study List
                <img src="" alt="RightArrow">
            </a>
        </div>
    </div>
</div>

<style>
    #backDrop {
        z-index: 2;
        height: 100vh;
        width: 100%;
        /* display: block | none; */
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

    #menu-header{
        align-items: center;
        display: flex;
    }

    #menu-list{
        display: flex;
        flex-direction: column;
        padding: 1vw;
    }

    #menu-list a{
        color: #03353C;
        font-family: regularp;
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid black;
        padding-bottom: 1vh;
        margin-top: 1vh;
    }
</style>
