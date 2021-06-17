<html>
<head>


</head>
<style>
    .drinks{
        display: grid;
        grid-template-columns: repeat(3,1fr);
        padding: 80px 60px;
        grid-column-gap: 20px;
        grid-row-gap:30px;
    }
    .item img{
        width: 100%;
        height: 300px;
        object-fit: cover;
        cursor:pointer;
        transform: 0.2s ease;
    }
    .item img:hover{
        transform: scale(1.04);
    }
    .item h4{
        padding:5px;
        text-align: center;
    }
    .item button{
        padding: 5px 30px;
        border:none;
        outline: none;
        background-color:brown;
        color:white;
        cursor:pointer;
        border-radius: 4px;
        font-size: 20px;
        display: block;
        margin:0 auto;
        transition: 0.2s all;
    }
    .item button:hover{
        transform:scale(1.08);
    }
    button{
        padding: 10px 30px;
        border:none;
        outline: none;
        background-color:#1EAE98;
        color:white;
        cursor:pointer;
        border-radius: 4px;
        font-size: 20px;
        display: block;
        margin:20 auto;
        transition: 0.2s all;
        margin-left:10px;
    
    }
    button:hover{
        transform:scale(1.08);
    }



</style>


<body>
    <section class="drinks">
        <div class="item">
            <img src="kahve.jpg">
            <h4>Türk Kahvesi</h4>
            <form action="drinkdb.php">
            <button>Sipariş Ver</button>
            </form>
        </div>
        <div class="item">
            <img src="soda.jpg">
            <h4>Soda</h4>
            <form action="drinkdb.php">
            <button>Sipariş Ver</button>
            </form>
        </div>
        <div class="item">
            <img src="cikolata.jpg">
            <h4>Sıcak Çikolata</h4>
            <form action="drinkdb.php">
            <button>Sipariş Ver</button>
            </form>
        </div>

        <form action="menu.php">
        <button>Menuye Dön</button>
        </form>



    </section>





</body>



</html>