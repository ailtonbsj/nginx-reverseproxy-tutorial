#

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
