<?php 
include "db.php";

if($_SERVER['REQUEST_METHOD']==="POST"){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $type=$_POST['type'];
    $price=$_POST['price'];

    $sql=$conn->prepare("insert into product(product_id,product_name,product_type,product_price) values(?,?,?,?)");
    $sql->bind_param("issi",$id,$name,$type,$price);

    $sql->execute();


}

?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main class="container justify-content-center align-item-center mt-5 col-4">
            <div class="shadow box p-4">
                <h3 class="text-center">Insert data</h3>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">Product ID</label>
                        <input
                            type="text"
                            class="form-control"
                            name="id"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>

                     <div class="mb-3">
                        <label for="" class="form-label">Product Name</label>
                        <input
                            type="text"
                            class="form-control"
                            name="name"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>

                     <div class="mb-3">
                        <label for="" class="form-label">Product Type</label>
                        <input
                            type="text"
                            class="form-control"
                            name="type"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>

                     <div class="mb-3">
                        <label for="" class="form-label">Product Price</label>
                        <input
                            type="text"
                            class="form-control"
                            name="price"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                        
                    </div>

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Submit
                    </button>

                    <button><a href="csv.php">Download</a></button>
                    
                    
                </form>

            </div>


        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
