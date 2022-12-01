### Containerization 
A way to package application with all the necessary dependencies and configuration.
Portable artifact, easily shared and moved around.

#### Containers lives in repositories:
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
    - After running an image it is a container 

#### Common Commands:
  - ` docker pull image `
  - ` docker run image `
