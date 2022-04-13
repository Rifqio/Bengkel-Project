# DOKUMENTASI PROJECT

- Fitur Registrasi JetStream (Verification Email, Privacy and Policy) gunakan mailtrap untuk uji coba email
    doc (https://jetstream.laravel.com/2.x/installation.html, https://laratrust.santigarcor.me/docs/7.x/usage/roles-and-permissions.html#setting-things-up)
- Backend (Alur Akses Dashboard User)
1. Guest tanpa login mengarah ke '/' ditampilkan dashboard user
2. Jika ke '/dashboard' maka ditampilakn halaman login (Frontend tambahin href ke /dashboard)
3. Jika punya role (super, admin) dia akan masuk ke dashboard
4. Jika tidak maka diarahkan ke landing page untuk login atau register sebagai ('Mitra')

- Menambah user dashboard (Frontend)
- Menambah migrasi dan relasi antar tabel (11 April 2022)
- Menambah template admin untuk view (13 April 2022)
