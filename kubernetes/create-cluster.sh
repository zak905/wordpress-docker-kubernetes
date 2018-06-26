kubectl create -f db.yaml && echo "created database deployment" && sleep 2s && \
kubectl expose deployment wordpress-db --type=ClusterIP --name=wordpress-db-svc --port=3306 && echo "created database service" && sleep 5s && \
kubectl create configmap hostname-config --from-literal=db_host=$(kubectl get svc wordpress-db-svc -o jsonpath="{.spec.clusterIP}") && echo "created config map" && \
kubectl create -f wordpress.yaml  && echo "created wordpress deployment" && sleep 5s && \
kubectl expose deployment wp --type=LoadBalancer --name=wp-svc --port=80 --external-ip=167.99.88.86 && echo "Finished cluster creation.."