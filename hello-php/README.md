# Build image

```bash
docker build -t hello-php .
```

# Run container

```bash
docker run -d --name hello-php-1 -p 8082:80 -e INSTANCE='instance1' hello-php
```