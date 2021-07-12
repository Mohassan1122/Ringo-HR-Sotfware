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
        if (isset($_GET['error'])) {
        ?>

                <div>
                        <div id="myAlert" class="alert alert-warning alert-dismissible fade show">
                                <strong><b> Error!</b></strong><?php echo "<ul>" . $_GET['error'] . "</ul>"; ?>
                                <button type="button" class="close">&times;</button>
                        </div>
                <?php
        }

                ?>

</body>