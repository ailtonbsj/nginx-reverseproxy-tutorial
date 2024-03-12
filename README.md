# Nginx as Reverse proxy and Load balancer

## History of commands

```bash
# Build images first
cd hello-web
docker build -t hello-php .
cd ..

cd hello-php
docker build -t hello-web .
cd ..

# start all containers
docker-compose up -d
```

## References

[Do zero ao proxy reverso e load balancer com NGINX - Fabricio Veronez](https://www.youtube.com/live/M9TwcTb5nFk?si=2axFgC8Uag19f-QY)