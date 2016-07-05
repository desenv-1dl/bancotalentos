import os,sys
lista = open('listaControles.csv','r')

for i in lista.readlines():
    print(i.split(';')[0])
