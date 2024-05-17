<h1>Customer Table Datas</h1>

musteri adi: {{$customer->name}}
<br>
address id: {{$customer->address_id}}
<br>
amount: {{$customer->amount}}
<br>
customer address: {{ $customer->address->address}}
---------------------------------------
<h1>Address Table Datas</h1>
adress name: {{$address->address}}
<br>
customer id: {{$address->customer_id}}
<br>
customer name: {{$address->customer->name}}
<br>
amount: {{$address->customer->amount}}