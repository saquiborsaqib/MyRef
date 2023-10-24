### Containerization 
A way to package application with all the necessary dependencies and configuration.
Portable artifact, easily shared and moved around.
Makes Development and Deployment more effecient.

#### Where do Containers lives?  *in repositories*:
  - Private 
  - Public like DockerHub

#### What is Container 
  - Layers of images 
  - Mostly Linux Base Image, because small size 
  - Application image on top

#### Docker Image -vs- Docker Container 
  - Image 
    - The Actual Package
    - Artifact, that can be moved around
    - `not running` 
  - Container
    - CONTAINER is a running environment for IMAGE

#### Basic Commands:
  - ` docker images `
  - ` docker ps `
  - ` docker ps -a `
  - ` docker pull image:version-number `
  - ` docker run image `
  - ` docker run -pHostPort:ContainerPort image `
  - ` docker stop container-id `
  - ` docker start container-id `
