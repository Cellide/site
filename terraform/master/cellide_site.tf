module "cellide_site" {
  source             = "cloudposse/s3-website/aws"
  version            = "0.18.0"
  namespace          = var.default_tags.owner
  stage              = var.default_tags.environment
  name               = "cellide_site"
  hostname           = "www.cellide.com"
  parent_zone_id     = "Z0771358Y03ADAX5GY7J"
  logs_enabled       = false
  tags               = var.default_tags
  versioning_enabled = false
}
