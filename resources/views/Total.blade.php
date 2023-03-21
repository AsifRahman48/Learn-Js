<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Imagination Invoice Example</title>
    <!-- For Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- CSS For Print Format -->
    <link rel="stylesheet" media="print" href="invoiceprint.css">
    <!-- CSS For Invoice -->
    <link rel="stylesheet"  href="invoice.css">
<style>
    .form-control
    {
        border: 0px;
    }

    .input-group-text
    {
        border: 0px;
        background-color: white;
    }

    table
    {
        border : 1px solid black;
    }
</style>

</head>
<body>


<div class="container ">


    <div class="card">
        <div class="card-header text-center">
            <h4>INVOICE</h4>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-6">
                </div>
                <div class="col-6">
                    <div class="mb-3 col-8">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" aria-describedby="dateHelp">
                    </div>
                    <div class="mb-3 col-8">
                        <label for="payment" class="form-label">Payment Type</label>
                        <input type="text" class="form-control" id="payment">
                    </div>
                    <div class="mb-3 col-8">
                        <label for="information" class="form-label">User Information</label>
                        <input type="text" class="form-control" id="information">
                    </div>
                </div>
            </div>


            <table class="table table-bordered">
                <thead class="table-success">
                <tr>
                    <th scope="col" class="text-end">Product</th>
                    <th scope="col" class="text-end">Qty</th>
                    <th scope="col" class="text-end">Rate</th>
                    <th scope="col" class="text-end">Amount</th>
                </tr>
                </thead>
                <tbody id="TBody">
                <tr id="TRow" >
                    <td>
                        <select class="item form-select" aria-label="Default select example" name="item" id="item" required>
                            <option value="" selected>Product Item</option>
                            <option value="1">Laptop</option>
                            <option value="2">Mobile</option>
                            <option value="3">Air Phone</option>
                            <option value="4">Head Phone</option>
                            <option value="5">Mouse</option>
                            <option value="6">Keyboard</option>
                            <option value="7">Charger</option>
                            <option value="8">Battery</option>
                            <option value="9">Watch</option>
                        </select>
                    </td>
                    <td><input type="number" class="form-control text-end" name="qty" onchange="Calc(this);"></td>
                    <td><input type="number" class="form-control text-end" name="rate"  onchange="Calc(this);"></td>
                    <td><input type="number" class="form-control text-end" name="amt" value="0" disabled=""></td>
                    <td ><button type="button" class="btn btn-sm btn-danger" onclick="BtnDel(this)">X</button></td>
                </tr>
                </tbody>
            </table>
            <div>
                <button type="button" class="btn btn-sm btn-success" onclick="BtnAdd()">Add Line</button>
            </div>

            <div class="row">
                <div class="col-8">
                </div>
                <div class="col-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" >Total</span>
                        <input type="number" class="form-control text-end" id="FTotal" name="FTotal" disabled="">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.6.2.slim.js" integrity="sha256-OflJKW8Z8amEUuCaflBZJ4GOg4+JnNh9JdVfoV+6biw=" crossorigin="anonymous"></script>
<script src="invoice.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script>

    function BtnAdd()
    {
        let selectField = document.getElementById("item");
        if (selectField.value === "") {
            alert("Please select a product");
            return false;
        }

        var v = $("#TRow").clone().appendTo("#TBody") ;
        $(v).find("input").val('');
    }

    function BtnDel(v)
    {
        $(v).parent().parent().remove();
        GetTotal();
    }

    function Calc(v)
    {
        var index = $(v).parent().parent().index();

        var qty = document.getElementsByName("qty")[index].value;
        var rate = document.getElementsByName("rate")[index].value;

        var amt = qty * rate;
        document.getElementsByName("amt")[index].value = amt;

        GetTotal();
    }

    function GetTotal()
    {

        var sum=0;
        var amts =  document.getElementsByName("amt");

        for (let index = 0; index < amts.length; index++)
        {
            var amt = amts[index].value;
            sum = +(sum) +  +(amt) ;
        }
        document.getElementById("FTotal").value = sum;
    }

</script>
</body>
</html>
