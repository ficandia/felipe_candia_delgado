<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
class PilaVentas:
def __init__(self):
    self.ventas = []  # Lista que actuará como pila

def push(self, venta):
    self.ventas.append(venta)  # Agregar una venta a la pila

def pop(self):
    if not self.isEmpty():
        return self.ventas.pop()  # Eliminar y devolver la última venta de la pila
    else:
        return "La pila de ventas está vacía"

def isEmpty(self):
    return len(self.ventas) == 0  # Verificar si la pila está vacía
     ?>
    
</body>
</html>