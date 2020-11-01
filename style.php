<meta name="viewport" content="width=device-width,initial-scale=1"/>
<style>
    ::-webkit-scrollbar{
        appearance:none;
        width:5px;
    }
    ::-webkit-scrollbar-track{
        background:transparent;
    }
    ::-webkit-scrollbar-thumb{
        background:#444;
    }
    body{
        background:#111;
        font-family:arial;
        color:#fff;
    }
    .main_container{
        margin-left:20%;
        margin-right:20%;
        position:relative;
    }
    .main{
        min-height:100vh;
        justify-content:center;
        align-items:center;
        display:flex;
    }
    .danger_btn{
        padding:10px;
        margin:auto;
        border:0px;
        border-radius:5px;
        background:red;
        color:#fff;
        float:right;
    }
    .card{
        padding:20px;
        background:#222;
        width:300px;
        margin:auto;
        color:#fff;
        border-radius:10px;
        box-shadow:0px 4px 20px rgba(0,0,0,0.2);
    }
    .card h1{
        margin-bottom:-15px;
    }
    input[type=text]{
        padding:15px;
        color:#fff;
        background:#111;
        width:80%;
        margin:auto;
        border:0px;
        border-radius:4px;
        color:#fff;
    }
    .card button{
        padding:10px;
        background:dodgerblue;
        border:0px;
        color:#fff;
        border-radius:5px;
        width:100%;
        cursor:pointer;
    }
    .modal{
        width:100%;
        height:100%;
        position:fixed;
        top:0px;
        left:0px;
        margin:auto;
        justify-content:center;
        align-items:center;
        min-height:100vh;
        display:none;
        background:#111;
    }
    .modal .modal_dialog{
        width:300px;
        box-shadow:0px 4px 10px rgba(0,0,0,0.2);
        border-radius:10px;
        background:#222;
        padding:20px;
        color:#fff;
    }
    .modal .modal_btn{
        padding:10px;
        background:dodgerblue;
        border:0px;
        border-radius:4px;
        color:#fff;
        cursor:pointer;
        width:100%;
    }
    .modal .modal_close_btn{
        background:#444;
        border:0px;
        padding:10px;
        color:#fff;
        border-radius:4px;
        width:100%;
        cursor:pointer;
    }
    .player_container{
        width:400px;
        margin:auto;
    }
    .chits{
        background:#333;
        border:2px solid #888;
        display:flex;
        justify-content:center;
        align-items:center;
        border-radius:10px;
        margin:5px;
        cursor:pointer;
        color:#fff;
        width:50%;
        height:100px;
    }
    .row{
        display:flex;
    }
    .dialogue_box{
        width:40%;
        border-radius:10px 10px 0px 0px;
        border:2px solid #fff;
        border-bottom-color:transparent;
        height:30%;
        background:#000;
        position:fixed;
        bottom:0px;
        left:0px;
        right:0px;
        margin-left:auto;
        margin-right:auto;
        display:none;
        overflow:hidden;
    }
    .msg_div{
        width:65%;
        height:90%;
        padding:20px 10px;
        z-index:99;
        overflow-y:scroll;
    }
    .character_div{
        background:url(images/king.png) center no-repeat;
        background-size:85%;
        width:35%;
        height:100%;
        right:0px;
        bottom:0px;
        position:absolute;
    }
    .close_dialogue_box,.skip_dialogue_box{
        position:absolute;
        right:0px;
        top:0px;
        color:#fff;
        border:0px;
        cursor:pointer;
        padding:10px;
        border-radius:10px;
        background:#333;
        z-index:99;
        outline:none;
    }
    .waiting_div{
        width:100%;
        height:100%;
        position:fixed;
        top:0px;
        left:0px;
        background:#222;
        display:flex;
        justify-content:center;
        align-items:center;
        z-index:999;
        text-align:center;
        flex-direction:column;
    }
    .waiting_players_div{
        display:block;

    }
    .start_button{
        padding:20px;
        color:#fff;
        background:dodgerblue;
        border-radius:10px;
        border:0px;
        font-size:20px;
        font-weight:bold;
        opacity:0.3;
    }
    @media only screen and (max-width:600px){
        .player_container,.main_container{
            width:100%;
            margin:0px;
        }
        .dialogue_box{
            width:95%;
        }
    }
</style>
<script src="jquery.js"></script>