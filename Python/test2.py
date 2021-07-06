    #!/usr/bin/python
import sys
from PIL import Image

#print ('arg 1: '+str(sys.argv[1])+' arg 2: '+str(sys.argv[2]))
#/var/www/html/test/storage/app/public/
modo = 1
user = 'julio'
if modo == 1:
    ruta = 'C:/Users/'+str(user)+'/Desktop/Test/storage/app/public/'
else:
    ruta = '/var/www/html/test/storage/app/public/'
archivos = sys.argv[1].split(',')
a = Image.open(r""+ruta+str(archivos[0]))
b = a.convert('RGB')
cont = len(archivos)
cont2 = 0
listadoimg = []
if(cont > 1):
    for imagen in archivos:
        if imagen != '':
            if cont2 != 0:
                aux = Image.open(r""+ruta+str(imagen))
                aux2 = aux.convert('RGB')
                listadoimg.append(aux2)
            cont2 = cont2+1
    b.save(r""+ruta+str(sys.argv[2]), save_all=True, append_images=listadoimg)        
else:
    b.save(r""+ruta+str(sys.argv[2]))
print("OK")