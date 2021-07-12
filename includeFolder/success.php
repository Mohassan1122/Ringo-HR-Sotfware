    <script>
        $(document).ready(function() {
            $(".close").click(function() {
                $("#myAlert").alert('close');
            });
        });
    </script>
    </head>

    <body>

        <?php
        if (isset($_GET['success'])) {
        ?>

            <div>
                <div id="myAlert" class="alert alert-success alert-dismissible fade show">
                    <h5 >SIGN UP</h5>
                    <p>Thank you for signing up. Please Click <a href="login.php" >Here</a> to get started</p>
                    <button type="button" class="close">&times;</button>
                </div>
            <?php
        }

            ?>


    </body>