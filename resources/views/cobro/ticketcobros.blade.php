<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket</title>
    
    <script type="text/javascript">
     function printHTML() { 
  if (window.print) { 
    window.print();
  }
}
document.addEventListener("DOMContentLoaded", function(event) {
  printHTML(); 
});
 </script>
</head> 
<body>
<style>
        .margen{
            margin: 5px;
        }
        .margenint{
            padding: 5px;
        }
        
.columna{
    width:350px;
}
.centrar{
    
    text-align: center;
}
.izqui{
    
    text-align: right;
}
thead th {
  border-top: 2px solid black;
  border-bottom: 2px solid black;
}
    </style>
<div style="width:100%; " class="text-center centrar">
    <img src="../public/fotos/logoticket.jpeg" alt="" width="40%">
    <br>
            <div class="margen "> <span class="page__heading melo" >Expertos en paqueteria</span></div>
            
           <!-- <img alt="image" src="/public/img/logo.png" > --> 
           
           <div class="margenint " style="background-color: black; color:white; width:100%;">  <span style="background-color: black; color:white; width:100%;">Comprobante de cobro</span> </div>
           
           <br>
           <span>Centro Comercial Metrogaleria
           local 3-9 <br> San Salvador </span>
           <br>
            
        </div >
        <div style="margin-top:10px;" class="centrar">
           <span >WWW.MELOEXPRESS.COM.SV</span></div>
       <br>

                        <div class="fecha centrar " style="font-weight: bolder;">
   TICKET Nº {{ $ticketact->codigo }}
  
   <br>
   <div class="centrar" >
   
    {{-- Código de barras con milon/barcode --}}
    <div style="margin-left: 100px;">
    {!! DNS1D::getBarcodeHTML($ticketact->codigo, 'C128', 2, 50) !!}
    </div>
   </div> 
 </div>
  <div  style="font-weight: bolder; margin-top: 20px;">
   Comercio {{ $ticketact->comercio }}
   <br>
   
   <hr>
   </div>
   
   <div class="fecha ">
   <span > Fecha: {{ now()->Format('d/m/Y')}} </span>
   <span style="float:right; ">Hora: {{ now()->Format('H:i A')}}</span> 
   </div>
   
   
   <div class="centrar">
<table class="centrar" style="width: 100%; display:table;">
    <thead class="centrar" style="border-top: 2px solid black; border-bottom: 2px solid black;">
        <tr>
        <th style="width: 200px;">DESCRIPCION</th>
        <TH>CANT</TH>
        <TH>IMPORTE</TH>
        </tr>

        <tbody>
            <tr>
                <td style="text-align: left;">Personalizado</td>
                <td>{{ $ticketact->perso }}</td>
                <td>${{ $ticketact->persoi }}</td>
            </tr>
            <tr>
                <td style="text-align: left;">Punto fijo</td>
                <td>{{ $ticketact->punto }}</td>
                <td>${{ $ticketact->puntoi }}</td>
            </tr>
            <tr>
                <td style="text-align: left;">Casillero</td>
                <td>{{ $ticketact->casil }}</td>
                <td>${{ $ticketact->casili }}</td>
            </tr>
            <tr>
                <td style="text-align: left;">Personalizado Departamental</td>
                <td>{{ $ticketact->depar }}</td>
                <td>${{ $ticketact->depari }}</td>
            </tr>
            <tr >
                <td style="text-align: left; border-bottom: 2px solid black;"> Guias</td>
                <td style="border-bottom: 2px solid black;">{{ $ticketact->guias }}</td>
                <td style="border-bottom: 2px solid black;">${{ $ticketact->guias }}<</td>
            </tr>
            <tr style="text-align: left;">
                    
                    
                    <td style=" " >Método de pago: {{ $ticketact->metodo }} </td>
                    <td style="" class="centrar">
                     
                    </td>
                    
                    
                </tr>
            <tr >
                <td></td>
                <td>SUBTOTAL</td>
                <td style="text-align: left; padding-left: 25px;">${{ $ticketact->persoi + $ticketact->puntoi + $ticketact->casili + $ticketact->depari + $ticketact->guias }}
                 
                </td>
                
            </tr>
            <tr >
                <td></td>
                <td>DESCUENTO</td>
                <td style="text-align: left; padding-left: 25px;">${{ $ticketact->descuento }}
                 
                </td>
                
            </tr>
            <tr>
                <td></td>
                <td style="font-weight: bolder;">TOTAL</td>
                <td style="text-align: left; padding-left: 25px;">${{ $ticketact->total }}</td>
            </tr>
            <tr>
                
                <td colspan="2" style="text-align: right;">ENTREGA EFECTIVO:</td>
                <td style="text-align: left; padding-left: 25px;">${{ $ticketact->entrega }}</td>
            </tr>
            <tr >
                <td></td>
                <td>CAMBIO:</td>
                <td style="text-align: left; padding-left: 25px;">${{ $ticketact->cambio }}</td>
            </tr>
           
        </tbody>

    </thead>
</table>
<br>
<div>Le atendio: {{ Auth::user()->name }}</div>
<hr>
<div>¡¡GRACIAS POR PREFERIRNOS!!</div>
<hr>
<div class="centrar" style="margin-top: 20px; margin-left: 90px;">
    
    {!! DNS2D::getBarcodeHTML(strval($ticketact->codigo), 'QRCODE', 10, 10) !!}
</div>



</body>
</html>










