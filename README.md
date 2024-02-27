1) Api ir veids ka jebkuras programmas (biežak frontend) var komunicet ar serveru(backend)
2) $var = ...;
3) MVC, arhitektūras princips, Modeli -> Atbildīgs par datu apstrādi un piekļuvi datu avotiem,  Skats ->  Atbildīgs par datu attēlošanu lietotājam, atbilstoši lietotāja definētai datu prezentācijas formai, Kontrollers -> Saņem un apstrādā ziņojumus no lietotāja, pārvalda datu apstrādi starp modelim un skatam
4) ir tehnika, kas ļauj jums vaicāt un manipulēt datiem no datu bāzes, izmantojot objektā orientētu paradigmu, palīdz automātiski sinhronizēt modelu klasēm ar faktisko datu bāzes struktūru,  tas automatizē daudzus no SQL koda pārvaldības aspektiem
5) User::where('rating', '>',  4)->get();