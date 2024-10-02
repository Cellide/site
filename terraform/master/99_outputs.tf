# https://www.terraform.io/docs/language/values/outputs.html

output "cellide_site_bucket" {
  value = module.cellide_site.s3_bucket_name
}

output "cellide_site_endpoint" {
  value = module.cellide_site.s3_bucket_website_endpoint
}
