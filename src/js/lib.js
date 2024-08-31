import * as THREE from 'three';
import { GLTFLoader } from 'three/examples/jsm/loaders/GLTFLoader.js';
import { OrbitControls } from 'three/addons/controls/OrbitControls.js';

const bikes = document.getElementById('homeinfo__shere');
if (bikes) {
 var clientWidth = document.getElementById('homeinfo__content-box').clientWidth;
  //var clientHeight = document.getElementById('homeservice__content-box').clientHeight;
  const scene = new THREE.Scene();
  
  
  const sizes = {
    width: clientWidth,
    height: 300
    }
  
  const camera = new THREE.PerspectiveCamera(45, sizes.width / sizes.height, 0.1, 100);
  
  const renderer = new THREE.WebGLRenderer({
     antialias: true,
     alpha: true,
     canvas: bikes
  });
  renderer.setSize(sizes.width, sizes.height);
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  renderer.setClearColor(0xffffff, 0);
  camera.position.set(0, 0, 14);

  const controls = new OrbitControls( camera, renderer.domElement );

  scene.position.set(-0.2, -1, 0.5);
  renderer.render(scene, camera);
  const mainLight = new THREE.PointLight(0xffffff, 1);
  const mainLight2 = new THREE.PointLight(0xffffff, 1);
  mainLight.position.set(-10, 4, 10);
  mainLight2.position.set(10, 0, -4);

  scene.add(mainLight, mainLight2);

const loader = new GLTFLoader();
const image = bikes.getAttribute('data-src');
let mixer = null;
loader.load(image, function(gltf) {
  scene.add(gltf.scene);

});
const clock = new THREE.Clock();
function animate() {
  requestAnimationFrame( animate );
  scene.rotation.y -=0.005;
  renderer.render( scene, camera );
}
animate();

}

const onas = document.getElementById('ONas__animate');
   if(onas) {
      const scene = new THREE.Scene();
   var clientWidth = document.getElementById('page__left').clientWidth;
   var clientHeight = document.getElementById('page__left').clientHeight;
   const sizes = {
   width: clientWidth,
   height: clientHeight
   }
   const camera = new THREE.PerspectiveCamera(45, sizes.width / sizes.height, 0.1, 100);
   
   const renderer = new THREE.WebGLRenderer({
      antialias: true,
      alpha: true,
      canvas: onas
   });
   renderer.setSize(sizes.width, sizes.height);
   renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
   renderer.setClearColor(0xffffff, 0);
   camera.position.set(0, 0, 20);
   const controls = new OrbitControls( camera, renderer.domElement );
   scene.position.set(0, -0.3, 16);
   renderer.render(scene, camera);

   window.addEventListener('resize', function() {
      var clientWidth = document.getElementById('ONas__page').clientWidth;
      var clientHeight = document.getElementById('ONas__page').clientHeight;
      var width = clientWidth;
      var height = clientHeight;
      renderer.setSize(width, height);
      });
     
   
   const mainLight = new THREE.PointLight(0xffffff, 2);
   const mainLight2 = new THREE.PointLight(0xffffff, 2);
   mainLight.position.set(20, 15, -20);
   mainLight2.position.set(-10, 16, 30);
   scene.add(mainLight, mainLight2);
  let mixer = null;
   const loader = new GLTFLoader();
   const image = onas.getAttribute('data-src');
   loader.load(image, function(gltf) {
     mixer = new THREE.AnimationMixer(gltf.scene);
      const action = mixer.clipAction(gltf.animations[0]);
      action.play();
      scene.add(gltf.scene);
    // gltf.scene.position.set(0, 0, 16);
     gltf.scene.rotation.set(0, -1.4, 0);

  

   });

  const clock = new THREE.Clock();
   function animate() {
      requestAnimationFrame( animate );
      const delta = clock.getDelta();
      mixer.update(delta);
      scene.rotation.y +=0.01;
      renderer.render( scene, camera );
   }
   animate();
   
}

const servPage = document.getElementById('single__service-anim');
if(servPage) {
   const scene = new THREE.Scene();
   var clientWidth = document.getElementById('single__service-right').clientWidth;
   var clientHeight = document.getElementById('single__service-left').clientHeight;
   const sizes = {
   width: clientWidth,
   height: clientHeight 
   }
   const camera = new THREE.PerspectiveCamera(45, sizes.width / sizes.height, 0.1, 100);
   
   const renderer = new THREE.WebGLRenderer({
    antialias: true,
    alpha: true,
      canvas: servPage
   });
  
  // scene.background = new THREE.Color(0x151515);
   renderer.setSize(sizes.width, sizes.height);
   renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  
   renderer.setClearColor(0xffffff, 0);
   camera.position.set(0, 3.6, 0);
   scene.rotation.set(3.4, 1, 3);
   scene.position.set(0, 3.1, -27);
   //const controls = new OrbitControls(camera, renderer.domElement);


  
   renderer.render(scene, camera);
   window.addEventListener('resize', function() {
      var clientWidth = document.getElementById('single__service-right').clientWidth;
      var clientHeight = document.getElementById('single__service-left').clientHeight;
      var width = clientWidth;
      var height = clientHeight;
      renderer.setSize(width, height);
      });

      
   
   const mainLight = new THREE.PointLight(0xffffff);
   const mainLight2 = new THREE.PointLight(0xffffff);
   mainLight.position.set(40, 15, -20);
   mainLight2.position.set(-40, 6, 30);
   scene.add(mainLight, mainLight2);
   

   const loader = new GLTFLoader();
   const image = servPage.getAttribute('data-src');
   loader.load(image, function(gltf) {
       scene.add(gltf.scene);
      
   });
  
   function animate() {
     requestAnimationFrame( animate );
  
   scene.rotation.y+=0.01;
     renderer.render( scene, camera );
   }
   animate();
}

const HomeCanv = document.getElementById('homezak__animation');
if(HomeCanv) {
const scene = new THREE.Scene();
var clientWidth = document.getElementById('homezak__content-left').clientWidth;
var clientHeight = document.getElementById('homezak__content-left').clientHeight;
const sizes = {
width: clientWidth,
height: clientHeight
}
const camera = new THREE.PerspectiveCamera(45, sizes.width / sizes.height, 0.1, 100);

const renderer = new THREE.WebGLRenderer({
 antialias: true,
 alpha: true,
   canvas: HomeCanv
});

renderer.setSize(sizes.width, sizes.height);
renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));



renderer.setClearColor(0xffffff, 0);
camera.position.set(0, 1.1, 0);
scene.rotation.set(3.5, 17, 3.2);
scene.position.set(0, 0, -11);

  
window.addEventListener('resize', function() {
var clientWidth = document.getElementById('homezak__content-left').clientWidth;
var width = clientWidth;
var height = clientHeight;
renderer.setSize(width, height);
});

//const mainLight = new THREE.AmbientLight(0xffffff);
const mainLight = new THREE.PointLight(0xffffff, 2);
 const mainLight2 = new THREE.PointLight(0xffffff, 2);

mainLight.position.set(20, 15, -20);
 mainLight2.position.set(-20, 15, 40);

scene.add(mainLight, mainLight2);

  const loader = new GLTFLoader();
  const image = HomeCanv.getAttribute('data-src');
  let mixer = null;
  loader.load(image, function(gltf) {
   mixer = new THREE.AnimationMixer(gltf.scene);
   const action = mixer.clipAction(gltf.animations[0]);
   action.play();
scene.add(gltf.scene);
const moneta = gltf.scene;
scene.position.set(0, 0, -15);
scene.add( moneta);

const clock = new THREE.Clock();
function animmonet(){
   requestAnimationFrame( animmonet );
   const delta = clock.getDelta();
   mixer.update(delta);
 
   moneta.rotation.y -=0.01;
   
  
}
animmonet();
  });
 


  function animate() {
    requestAnimationFrame( animate );

    renderer.render( scene, camera );
  }
  animate();
}

const actionsanim = document.getElementById('actions-anim');
if (actionsanim) {
  //var clientWidth = document.getElementById('homeservice__box-item').clientWidth;
  //var clientHeight = document.getElementById('homeservice__content-box').clientHeight;
  const scene = new THREE.Scene();
  
  
  const sizes = {
    width: 300,
    height: 460
    }
  
  const camera = new THREE.PerspectiveCamera(45, sizes.width / sizes.height, 0.1, 100);
  
  const renderer = new THREE.WebGLRenderer({
     antialias: true,
     alpha: true,
     canvas: actionsanim
  });
  renderer.setSize(sizes.width, sizes.height);
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  renderer.setClearColor(0xffffff, 0);
  camera.position.set(0, 0, 40);

  //scene.position.set(0, 0, -5);
  renderer.render(scene, camera);
  const mainLight = new THREE.PointLight(0xffffff, 10);
  const mainLight2 = new THREE.PointLight(0xffffff, 10);
  const mainLight3 = new THREE.DirectionalLight(0xffffff, 20);
  mainLight.position.set(20, -20, 8);
  mainLight2.position.set(-25, -20, 18);

  const controls = new OrbitControls( camera, renderer.domElement );

  scene.add(mainLight, mainLight2, mainLight3);

const loader = new GLTFLoader();
const image = actionsanim.getAttribute('data-src');
let mixer = null;
loader.load(image, function(gltf) {
  mixer = new THREE.AnimationMixer(gltf.scene);
  const action = mixer.clipAction(gltf.animations[0]);
  action.play();
  gltf.scene.position.set(0, -9, 8);
  gltf.scene.rotation.set(0, -1.3, 0 );
  scene.add(gltf.scene);

});
const clock = new THREE.Clock();
function animate() {
  requestAnimationFrame( animate );
  const delta = clock.getDelta();
  //scene.rotation.y +=0.001;
  mixer.update(delta);
  renderer.render( scene, camera );
}
animate();

}





const widget = document.getElementById('dance');
if (widget) {
  var clientWidth = document.getElementById('sidebar__widget-wrapper').clientWidth;
  //var clientHeight = document.getElementById('homeservice__content-box').clientHeight;
  const scene = new THREE.Scene();
  
  
  const sizes = {
    width: clientWidth,
    height: 300
    }
  
  const camera = new THREE.PerspectiveCamera(45, sizes.width / sizes.height, 0.1, 100);
  
  const renderer = new THREE.WebGLRenderer({
     antialias: true,
     alpha: true,
     canvas: widget
  });
  renderer.setSize(sizes.width, sizes.height);
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  renderer.setClearColor(0xffffff, 0);
  camera.position.set(0, 0, 10);
  const controls = new OrbitControls( camera, renderer.domElement );
  //scene.position.set(0, 0, -5);
  renderer.render(scene, camera);
  const mainLight = new THREE.PointLight(0xffffff, 10);
  const mainLight2 = new THREE.PointLight(0xffffff, 10);
  const mainLight3 = new THREE.DirectionalLight(0xffffff, 20);
  mainLight.position.set(0, 14, 10);
  mainLight2.position.set(10, 16, 14);

  scene.add(mainLight, mainLight2, mainLight3);

const loader = new GLTFLoader();
const image = widget.getAttribute('data-src');
let mixer = null;
loader.load(image, function(gltf) {
  mixer = new THREE.AnimationMixer(gltf.scene);
  const action = mixer.clipAction(gltf.animations[0]);
  action.play();
  gltf.scene.position.set(0, -12, -24);
  gltf.scene.rotation.set(0, -1.2, 0 );
  scene.add(gltf.scene);

});
const clock = new THREE.Clock();
function animate() {
  requestAnimationFrame( animate );
  const delta = clock.getDelta();
  //scene.rotation.y +=0.001;
  mixer.update(delta);
  renderer.render( scene, camera );
}
animate();

}

const tagPage = document.getElementById('teg-anim');
if(tagPage) {
   const scene = new THREE.Scene();
   var clientWidth = document.getElementById('teg-anim-w').clientWidth;
   //var clientHeight = document.getElementById('single__service-left').clientHeight;
   const sizes = {
   width: clientWidth,
   height: 400 
   }
   const camera = new THREE.PerspectiveCamera(45, sizes.width / sizes.height, 0.1, 100);
   
   const renderer = new THREE.WebGLRenderer({
    antialias: true,
    alpha: true,
      canvas: tagPage
   });
  
  // scene.background = new THREE.Color(0x151515);
   renderer.setSize(sizes.width, sizes.height);
   renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  
   renderer.setClearColor(0xffffff, 0);
   camera.position.set(0, 3.6, 0);
   scene.rotation.set(3.4, 1, 3);
   scene.position.set(0, 3.1, -27);
   //const controls = new OrbitControls(camera, renderer.domElement);


  
   renderer.render(scene, camera);
   window.addEventListener('resize', function() {
      var clientWidth = document.getElementById('teg-anim-w').clientWidth;
     // var clientHeight = document.getElementById('single__service-left').clientHeight;
      var width = clientWidth;
      var height = 400;
      renderer.setSize(width, height);
      });

      
   
   const mainLight = new THREE.PointLight(0xffffff);
   const mainLight2 = new THREE.PointLight(0xffffff);
   mainLight.position.set(40, 15, -20);
   mainLight2.position.set(-40, 6, 30);
   scene.add(mainLight, mainLight2);
   

   const loader = new GLTFLoader();
   const image = tagPage.getAttribute('data-src');
   loader.load(image, function(gltf) {
       scene.add(gltf.scene);
      
   });
  
   function animate() {
     requestAnimationFrame( animate );
  
   scene.rotation.y+=0.01;
     renderer.render( scene, camera );
   }
   animate();
}







