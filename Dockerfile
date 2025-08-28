# ❌ Image có nhiều CVE
FROM ubuntu:16.04

RUN apt-get update && apt-get install -y curl
CMD ["echo", "hello insecure world"]
