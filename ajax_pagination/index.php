<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #main {
            margin: 0 auto;
        }

        #pagination {
            margin: 20px 0;
            text-align: center;
        }

        #pagination a {
            display: inline-block;
            min-width: 40px;
            padding: 10px 15px;
            margin: 0 4px;
            text-decoration: none;
            color: #333;
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 6px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        #pagination a.active {
            background: #0d6efd;
            color: #fff;
            border-color: #0d6efd;
        }
    </style>
</head>

<body>
    <table id="main">
        <tr>
            <td id="header" style="display:flex;">
                <h1>PHP & Ajax Pagination</h1>
            </td>
        </tr>
        <tr>
            <td id="table-data">

            </td>
        </tr>
        </tr>
    </table>
    <!-- <div id="pagination">
        <a class="active" id="1" href="">1</a>
        <a id="2" href="">2</a>
        <a id="3" href="">3</a>
        <a id="4" href="">4</a>
    </div> -->


    <script src="js/jquery.js"></script>

    <script>
        $(document).ready(function() {

            function loadTable(page) {
                $.ajax({
                    url: "ajax-pagination.php",
                    type: "POST",
                    data: {
                        page_no: page
                    },
                    success: function(data) {
                        $("#table-data").html(data);
                    }
                });
            }

            loadTable(1);

            $(document).on("click", "#pagination a", function(e) {
                e.preventDefault();

                $("#pagination a").removeClass("active");
                $(this).addClass("active");

                var page_id = $(this).attr("id");

                loadTable(page_id);
            });

        });
    </script>



</body>

</html>