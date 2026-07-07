baixar instalador e rodar:
chmod +x xampp-linux-x64-8.x.x-installer.run
e
sudo ./xampp-linux-x64-8.x.x-installer.run

iniciar tudo:
sudo /opt/lampp/lampp start

parar:
sudo /opt/lampp/lampp stop

restart:
sudo /opt/lampp/lampp restart

inteface:
sudo /opt/lampp/manager-linux-x64.run

acessar serviço:
http://localhost

acessar projeto
http://localhost/meu_site

baixar lib necessária:
sudo dnf install libxcrypt-compat libnsl
e
sudo /opt/lampp/lampp start
