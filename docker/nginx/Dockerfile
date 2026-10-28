# de_GWD 内置 nginx 镜像
# 用于替代已失效的上游镜像 jacyl4/nginx_tls1.3
#
# 官方 nginx:stable 基于 Debian，搭载 OpenSSL 1.1.1 及以上版本，
# 原生支持 TLS 1.3。容器以 host 网络模式运行，nginx.conf、conf.d、
# 证书、PHP socket 与网页目录均由宿主机挂载，因此镜像本身无需内置配置。
FROM nginx:stable
