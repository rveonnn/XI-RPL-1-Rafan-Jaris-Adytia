#memasukkan parameter class
angka1 = float(input("Masukkan angka pertama: "))
angka2 = float(input("Masukkan angka kedua: "))

class Kalkulator: #ini adalah class
    def __init__(self, angka1, angka2): #ini adalah konstruktor
        #ini adalah atribut
        self.angka1 = angka1 
        self.angka2 = angka2 

    #method
    def tambah(self):
        return self.angka1 + self.angka2  #Method pertambahan
    def kurangan(self):
        return self.angka1 - self.angka2  #Method pertambahan
    def kali(self):
        return self.angka1 * self.angka2  #Method pertambahan
    def bagi(self):
        if self.angka2 != 0:
            return self.angka1 / self.angka2  #Method pertambahan
        else:
            return "Error: Tidak bisa dibagi oleh nol"


kalkulator = Kalkulator(angka1, angka2) #Membuat objek dari kelas Kalkulator
print("Hasil pertambahan:", kalkulator.tambah()) #untuk print hasil dari kalkulator pertambahan
print("Hasil pengurangan:", kalkulator.kurangan()) #untuk print hasil dari kalkulator pengurangan
print("Hasil perkalian:", kalkulator.kali()) #untuk print hasil dari kalkulator perkalian
print("Hasil pembagian:", kalkulator.bagi()) #untuk print hasil dari kalkulator pembagian
