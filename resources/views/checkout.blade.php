<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>checkout</title>
</head>
<body>
    <div>subtotal: <span id="subtotal"> 150</span></div>
    <select name="location" id="loc">
        <option value="0" id="">minna</option>
        <option value="700" id="niger">niger state other LGA</option>
        <option value="2500" id="others">other locations</option>
    </select>
    <div>Shipping cost: <span id="shipping"></span></div>
    <div>Total cost: <span id="total"></span></div>

<a href="{{url('checkout/payment')}}" onclick="
event.preventDefault();
document.getElementById('form-total').submit();
"> checkout</a>
    <form action="{{url('checkout/payment')}}" method="get" id="form-total">
        <input type="hidden" name="total_price" id="total_price">
    </form>
    <script>
        var subtotal = document.getElementById('subtotal')
        var loc = document.getElementById('loc')
        var minna = document.getElementById('minna')
        var niger = document.getElementById('niger')
        var others = document.getElementById('others')
        var shipping = document.getElementById('shipping')
        var total = document.getElementById('total')
        var total_price = document.getElementById('total_price')

        // shipping.innerText = loc.value
        
        if(loc.value == '0'){
            shipping.innerText = 'Free'
        }else if(loc.value == '700'){
            shipping.innerText = '700'
        }else if(loc.value == '2500'){
            shipping.innerText = '2500'
        }
        total.innerText = parseFloat(loc.value) + parseFloat(subtotal.innerText)
        total_price.value = total.innerText
        console.log('total price: ',total_price.value)
        loc.onchange = () =>{
            console.log(loc.value);
            if(loc.value == '0'){
                shipping.innerText = 'Free'
                total.innerText = parseFloat(loc.value) + parseFloat(subtotal.innerText)
                total_price.value = total.innerText
                console.log('total price: ',total_price.value)
            }else if(loc.value == '700'){
                shipping.innerText = '700'
                total.innerText = parseFloat(loc.value) + parseFloat(subtotal.innerText)
                total_price.value = total.innerText
                console.log('total price: ',total_price.value)
            }else if(loc.value == '2500'){
                shipping.innerText = '2500'
                total.innerText = parseFloat(loc.value) + parseFloat(subtotal.innerText)
                total_price.value = total.innerText
                console.log('total price: ',total_price.value)
            }
        }


        
    </script>
</body>
</html>