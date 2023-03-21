<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>


</head>
<body>

<h2 class="text-center">Invoice</h2>

<form>
    <div class="mb-3 col-3">
        <label for="date" class="form-label">Date</label>
        <input type="date" class="form-control" id="date" aria-describedby="dateHelp">
    </div>
    <div class="mb-3 col-3">
        <label for="payment" class="form-label">Payment Type</label>
        <input type="text" class="form-control" id="payment">
    </div>
    <div class="mb-3 col-3">
        <label for="information" class="form-label">User Information</label>
        <input type="text" class="form-control" id="information">
    </div>

    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <td scope="col">Item</td>
            <td scope="col">qty</td>
            <td scope="col">price</td>
            <td scope="col">Amount</td>
            <td scope="col"></td>
        </tr>
        </thead>
        <tbody id="tbd_pr" class="tbd_pr">
                <tr id="TRow" >
                    <td class="col-3">
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
                    <td class="col-3">
                        <input type="number" step="any"
                               class="qty1 form-control ng-dirty ng-valid-number ng-touched ng-invalid ng-invalid-required"
                               autocomplete="off"
                               ng-model="item.quantity" tabindex="42" id="Quantity" name="Quantity" value="0">
                    </td>
                    <td class="col-3">
                        <input type="number" step="any"
                               class="price1 form-control ng-dirty ng-valid-number ng-touched ng-invalid ng-invalid-required"
                               autocomplete="off"
                               ng-model="item.quantity" tabindex="42" name="price" id="price" value="0">
                    </td>
                    <td>
                        <div class="amount1 amount value ng-binding"  id="total_amount" onblur="totalAmount()">0.00</div>
                    </td>
                    <td class="NoPrint"><button type="button" class="btn btn-sm btn-danger" onclick="BtnDel(this)">X</button></td>
                </tr>
        </tbody>
    </table>

    <div class="new-line">
        <button type="button" class="btn btn-primary btn-sm extra-fields-customer" onclick="addLineItem()" id="">
                <path fill="currentColor"
                      d="M240 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H176V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H384c17.7 0 32-14.3 32-32s-14.3-32-32-32H240V80z">
                </path>
            <span class="fas fa-plus"></span>
            Line Item
        </button>
    </div>

    <div class="col-4 mt-3">
        <div class="input-group mb-3">
            <span class="input-group-text" >Total</span>
           <div class="m-3" id="FTotal">
           </div>
        </div>
    </div>

</form>

<script
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>
<script>

    function totalAmount(){
      //ht  alert('hi');
        var sum = 0;
        var amts = document.getElementById("total_amount");

        for (let index = 0; index < amts.length; index++) {
            var amt = amts[index].value;
            sum = +(sum) +  +(amt) ;

        }

        alert(sum);
        document.getElementById("FTotal").value = sum;
    }


    function BtnDel(v)
    {
        $(v).parent().parent().remove();
    }

    $('.qty1').on('input',function (){
        let qty=$(this).val()
        let price=$(this).parent().next('td').children('.price1').val();
        let result=parseInt(qty)*parseFloat(price);
        $(this).parent().next('td').next('td').children('.amount1').html(result);
    });

    $('.price1').on('input',function (){
        let price=$(this).val();
        let qty=$(this).parent().prev('td').children('.qty1').val();
      //  alert(qty);
        let result=parseInt(qty)*parseFloat(price);
        $(this).parent().next('td').children('.amount1').html(result);
    });

    function addLineItem() {
        let selectField = document.getElementById("item");
        if (selectField.value === "") {
            alert("Please select a valid option");
            return false;
        }
            var v = $("#TRow").clone().appendTo("#tbd_pr");
            $(v).find("input").val('');
            $(v).removeClass("d-none");


            $('.qty1').on('input', function () {
                let qty = $(this).val()
                let price = $(this).parent().next('td').children('.price1').val();
                let result = parseInt(qty) * parseFloat(price);
                $(this).parent().next('td').next('td').children('.amount1').html(result);
            });

            $('.price1').on('input', function () {
                let price = $(this).val();
                let qty = $(this).parent().prev('td').children('.qty1').val();
                //  alert(qty);
                let result = parseInt(qty) * parseFloat(price);
                $(this).parent().next('td').children('.amount1').html(result);
            });

    }


</script>

</body>
</html>

