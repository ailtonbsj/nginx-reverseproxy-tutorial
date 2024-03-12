# Build image

```bash
docker build -t hello-web .
```

# Run container

```bash
docker run -dit --name hello-web-1 -p 8081:80 hello-web
```