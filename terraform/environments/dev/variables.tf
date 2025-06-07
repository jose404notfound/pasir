variable "location" {
  type    = string
  default = "westeurope"
}

variable "resource_group_name" {
  type    = string
  default = "dev_aks-pasir"
}

variable "subscription_id" {
  type    = string
  default = "00000000-0000-0000-0000-000000000000"
}

variable "cluster_name" {
  type    = string
  default = "k8s"
}

variable "dns_prefix" {
  type    = string
  default = "k8s-dns"
}

variable "kubernetes_version" {
  type    = string
  default = "1.31.8"
}

variable "node_count" {
  type    = number
  default = 1
}

variable "vm_size" {
  type    = string
  default = "Standard_D2ps_v6"
}

variable "os_disk_size_gb" {
  type    = number
  default = 30
}

variable "max_pods" {
  type    = number
  default = 30
}

variable "network_plugin" {
  type    = string
  default = "azure"
}

variable "load_balancer_sku" {
  type    = string
  default = "standard"
}

variable "outbound_type" {
  type    = string
  default = "loadBalancer"
}

variable "service_cidr" {
  type    = string
  default = "10.0.0.0/16"
}

variable "dns_service_ip" {
  type    = string
  default = "10.0.0.10"
}

variable "identity_type" {
  type    = string
  default = "SystemAssigned"
}

variable "tags" {
  type    = map(string)
  default = {}
}
