<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive HTMl</title>
    <style>
        .container{
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap : 20px ;
        }
        .food{
            border: 3px solid goldenrod;
            border-radius: 10px;
            padding: 20px;
        }
        .food img {
            width: 75%;
        }
        @media screen and){
         .food{
            background-color: blue;
         }   
        }
        @media screen and (min-width: 577px )and  (max-width :992px) {
            .food{
               background-color: bisque;
            }
        }
    </style>
</head>
<body>
<?php include '../View/header.php'; ?>
   <div class="container">
    <div class="food">
        <img src="../img/eggplant.jpg" alt="">
        <h2>item - 1</h2>
		<h2>Egg-Plant</h2>
        <h4>price : 100</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis laudantium odio voluptas similique vel, incidunt soluta repellendus fuga eligendi facilis unde fugiat ea assumenda, quos aliquam blanditiis iste doloremque minus. Nisi amet facere possimus asperiores!</p>
        <a href="https://www.example.com">
        <a href="buy-now-form.php"><button>Order Now</button></a>
</a>
    </div>
    <div class="food">
        <img src="../img/rice.jpg" alt="">
        <h2>item - 2</h2>
		<h2>Rice</h2>
        <h4>price : 200</h4>
        <p>Expedita nam vel obcaecati odit, nisi adipisci reiciendis nihil accusamus animi similique modi, voluptas inventore asperiores, aspernatur natus quaerat cumque? Consequatur, nihil. Doloribus, illum. Debitis recusandae ex in incidunt corrupti explicabo. Soluta eum provident modi.</p>
		<br>
        <button>Order Now</button>
    </div>
    <div class="food">
        <img src="../img/potato.jpg" alt="">
		<h2> Potato</h2>
        <h2>item - 3</h2>
        <h4>price : 300</h4>
        <p>Fuga voluptate est enim vel eveniet alias sapiente soluta quas, blanditiis voluptates, ullam ut veritatis? Asperiores nisi deleniti amet laboriosam quidem! Ipsum animi accusantium excepturi blanditiis architecto, reprehenderit facere cupiditate tempore modi at libero perferendis?</p>
        <button>Order Now</button>
    </div>
    <div class="food">
        <img src="download.jpg" alt="">
        <h2>item - 4</h2>
        <h4>price : 400</h4>
        <p>Iure, velit natus! Est cum praesentium veniam. Natus quae quas odio necessitatibus deleniti? Quia voluptatibus corrupti in repudiandae et molestiae maxime ratione consectetur, quo facilis pariatur, ipsum eaque. Cupiditate excepturi, porro officia autem ipsa animi?</p>
        <button>Order Now</button>
    </div>
    <div class="food">
        <img src="download.jpg" alt="">
        <h2>item - 5</h2>
        <h4>price : 500</h4>
        <p>Quisquam tempora dolorum molestias beatae corrupti accusantium obcaecati voluptate sapiente sunt? Voluptas, facere! Ratione id fuga veniam cumque adipisci esse. Possimus iste harum dolore, optio labore inventore, quae amet unde laborum, ex officia dicta quia?</p>
        <button>Order Now</button>
    </div>
    <div class="food">
        <img src="download.jpg" alt="">
        <h2>item - 6</h2>
        <h4>price : 600</h4>
        <p>Quasi molestias rem, quia dolores natus deserunt doloribus enim sapiente nobis! Quos, ducimus. Cupiditate eos sunt reprehenderit qui, consequatur, ratione adipisci atque quo neque totam exercitationem et magni repellendus eligendi iste! Assumenda explicabo reprehenderit nihil?</p>
        <button>Order Now</button>
    </div>
    <div class="food">
        <img src="download.jpg" alt="">
        <h2>item - 7</h2>
        <h4>price : 700</h4>
        <p>Minus vel explicabo hic eius soluta accusantium dicta expedita harum rem beatae enim magnam provident molestias reprehenderit, ipsum, dignissimos officiis voluptate nobis dolorem quaerat commodi! Inventore sint eum modi dolorum odit, incidunt ex voluptate accusantium!</p>
        <button>Order Now</button>
    </div>
    <div class="food">
        <img src="download.jpg" alt="">
        <h2>item - 8</h2>
        <h4>price : 800</h4>
        <p>Itaque expedita illum veniam aperiam sunt sit eum saepe excepturi magnam! Ullam placeat eaque numquam explicabo deleniti, dolorem in natus magni id iure laborum dolor pariatur tempore optio nobis nemo rerum commodi! Earum, at quas?</p>
        <button>Order Now</button>
    </div>
    <div class="food">
        <img src="download.jpg" alt="">
        <h2>item - 9</h2>
        <h4>price : 900</h4>
        <p>Animi doloremque illo perspiciatis ea quis eos sed ipsa omnis, dolorum voluptas amet provident quasi laudantium aliquid reprehenderit exercitationem facilis fugiat veritatis nulla illum odit vel, praesentium ex? Sint obcaecati voluptas, rerum repellat eaque magni!</p>
        <button>Order Now</button>
    </div>
    <div class="food">
        <img src="download.jpg" alt="">
        <h2>item - 10</h2>
        <h4>price : 1000</h4>
        <p>Accusamus cumque sit consequatur quae odit, numquam doloribus omnis consectetur, unde atque, repellendus asperiores tempora rerum autem quibusdam libero quo dolorum eos possimus inventore! Harum recusandae voluptatum odio! Corrupti et dolores excepturi ipsam quo obcaecati.</p>
        <button>Order Now</button>
    </div>
    <div class="food">
        <img src="download.jpg" alt="">
        <h2>item - 11</h2>
        <h4>price : 1100</h4>
        <p>Impedit, officiis dolore! Voluptatem, at? Possimus corrupti eos recusandae ad placeat, minus quaerat odio illo mollitia explicabo eum nihil facilis non soluta tempora, quod culpa voluptatum vero? Sit veniam maiores corporis impedit, doloribus consequuntur corrupti.</p>
        <button>Order Now</button>
    </div>
    <div class="food">
        <img src="download.jpg" alt="">
        <h2>item - 12</h2>
        <h4>price : 1200</h4>
        <p>Aliquam eum maiores eveniet hic ab, magnam officiis eos itaque et perspiciatis quo ipsam recusandae est quae sequi veniam! Neque eaque fuga hic, voluptate quisquam commodi pariatur, earum atque non tempore dolore quos accusantium voluptatum?</p>
        <button>Order Now</button>
    </div>
   </div>
   <?php include '../View/Footer.php'; ?>
   
</body>
</html>