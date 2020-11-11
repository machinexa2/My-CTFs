FROM php:7.4-cli
COPY ctf_data/*.php /tmp/
COPY ctf_data/*.jpeg /tmp/
COPY ctf_data/*.html /tmp/
COPY ctf_data/*.txt /tmp/
COPY ctf_data/flag /var/www/html/
COPY ctf_data/flag2 /etc
WORKDIR /tmp
CMD ["php", "-S", "0.0.0.0:80"]
