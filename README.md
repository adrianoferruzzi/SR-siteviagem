# Site de uma Agência de Viagens

Exemplo de um site simples para a disciplina de serviços de redes.

Faça o download e disponibilize o site após fazer a instalação e configuração do servidor web.

Estes são os passos para disponibilizar o site em um Linux Ubuntu.

1. Instale o git
```
sudo apt-get install git
```

2. Faça o git-clone do site na sua pasta pessoal
```
cd 
git clone https://github.com/adrianoferruzzi/SR-siteviagem.git
```

3. Entre no diretório do projeto e copie a pasta "viagem" para o diretório /var/www/html
```
cd SR-siteviagem/viagem
sudo cp -r * /var/www/html/
```

4. Mude o dono dos arquivos para www-data
```
cd /var/www/html/
sudo chown -R www-data: *
```

5. Abra o navegador e abra o link.
```
http://localhost
```
