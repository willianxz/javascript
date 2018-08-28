<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            /* /!\ You need to add vendor prefixes in order to render the CSS properly (or simply use http://leaverou.github.io/prefixfree/) /!\ */ #tridiv {
  perspective: 800px;
  position: absolute;
  overflow: hidden;
  width: 100%;
  height: 100%;
  background: #3a89b7;
  font-size: 100%;
}
.scene, .shape, .face, .face-wrapper, .cr {
  position: absolute;
  transform-style: preserve-3d;
}
.scene {
  width: 80em;
  height: 80em;
  top: 50%;
  left: 50%;
  margin: -40em 0 0 -40em;
}
.shape {
  top: 50%;
  left: 50%;
  width: 0;
  height: 0;
  transform-origin: 50%;
}
.face, .face-wrapper {
  overflow: hidden;
  transform-origin: 0 0;
  backface-visibility: hidden;
  /* hidden by default, prevent blinking and other weird rendering glitchs */
}
.face {
  background-size: 100% 100%!important;
  background-position: center;
}
.face-wrapper .face {
  left: 100%;
  width: 100%;
  height: 100%
}
.photon-shader {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%
}
.side {
  left: 50%;
}
.cr, .cr .side {
  height: 100%;
}
[class*="cuboid"] .ft, [class*="cuboid"] .bk {
  width: 100%;
  height: 100%;
}
[class*="cuboid"] .bk {
  left: 100%;
}
[class*="cuboid"] .rt {
  transform: rotateY(-90deg) translateX(-50%);
}
[class*="cuboid"] .lt {
  transform: rotateY(90deg) translateX(-50%);
}
[class*="cuboid"] .tp {
  transform: rotateX(90deg) translateY(-50%);
}
[class*="cuboid"] .bm {
  transform: rotateX(-90deg) translateY(-50%);
}
[class*="cuboid"] .lt {
  left: 100%;
}
[class*="cuboid"] .bm {
  top: 100%;
}
[class*="cylinder"] .tp {
  transform: rotateX(90deg) translateY(-50%);
}
[class*="cylinder"] .bm {
  transform: rotateX(-90deg) translateY(-50%);
}
[class*="cylinder"] .tp, [class*="cylinder"] .bm, [class*="cylinder"] .tp .photon-shader, [class*="cylinder"] .bm .photon-shader {
  border-radius: 50%;
}
[class*="cylinder"] .bm {
  top: 100%;
}
/* .back styles */
.back {
  transform:translate3D(0em, 1.125em, 0em) rotateX(0deg) rotateY(180deg) rotateZ(0deg);
  opacity:1;
  width:16em;
  height:.5em;
  margin:-0.25em 0 0 -8em;
}
.back .ft {
  transform:translateZ(16em);
}
.back .bk {
  transform:translateZ(-16em) rotateY(180deg);
}
.back .rt, .back .lt {
  width:32em;
  height:.5em;
}
.back .tp, .back .bm {
  width:16em;
  height:32em;
}
.back .face {
  background-color:#303030;
}
.back .bm {
  background:url(http://tridiv.com/demos/iphone4S/back.png);
}
.back .ft {
  width:11em;
  margin-left:2.5em;
}
.back .bk {
  width:11em;
  margin-left:-2.5em;
}
.back .rt, .back .lt {
  width:27em;
}
.back .tp, .back .bm, .back .tp .photon-shader, .back .bm .photon-shader {
  border-radius:2.5em;
}
.back .cr {
  width:2.5em;
  left:1.25em;
}
.back .cr-0 {
  transform: translate3D(11em, 0, 13.5em);
}
.back .cr-1 {
  transform: translate3D(11em, 0, -13.5em);
}
.back .cr-2 {
  transform: translate3D(0, 0, -13.5em);
}
.back .cr-3 {
  transform: translate3D(0, 0, 13.5em);
}
.back .cr-0 .s0 {
  transform: rotateY(9deg) translate3D(-50%, 0, 2.475em);
}
.back .cr-0 .s1 {
  transform: rotateY(27deg) translate3D(-50%, 0, 2.475em);
}
.back .cr-0 .s2 {
  transform: rotateY(45deg) translate3D(-50%, 0, 2.475em);
}
.back .cr-0 .s3 {
  transform: rotateY(63deg) translate3D(-50%, 0, 2.475em);
}
.back .cr-0 .s4 {
  transform: rotateY(81deg) translate3D(-50%, 0, 2.475em);
}
.back .cr-1 .s0 {
  transform: rotateY(99deg) translate3D(-50%, 0, 2.475em);
}
.back .cr-1 .s1 {
  transform: rotateY(117deg) translate3D(-50%, 0, 2.475em);
}
.back .cr-1 .s2 {
  transform: rotateY(135deg) translate3D(-50%, 0, 2.475em);
}
.back .cr-1 .s3 {
  transform: rotateY(153deg) translate3D(-50%, 0, 2.475em);
}
.back .cr-1 .s4 {
  transform: rotateY(171deg) translate3D(-50%, 0, 2.475em);
}
.back .cr-2 .s0 {
  transform: rotateY(189deg) translate3D(-50%, 0, 2.475em);
}
.back .cr-2 .s1 {
  transform: rotateY(207deg) translate3D(-50%, 0, 2.475em);
}
.back .cr-2 .s2 {
  transform: rotateY(225deg) translate3D(-50%, 0, 2.475em);
}
.back .cr-2 .s3 {
  transform: rotateY(243deg) translate3D(-50%, 0, 2.475em);
}
.back .cr-2 .s4 {
  transform: rotateY(261deg) translate3D(-50%, 0, 2.475em);
}
.back .cr-3 .s0 {
  transform: rotateY(279deg) translate3D(-50%, 0, 2.475em);
}
.back .cr-3 .s1 {
  transform: rotateY(297deg) translate3D(-50%, 0, 2.475em);
}
.back .cr-3 .s2 {
  transform: rotateY(315deg) translate3D(-50%, 0, 2.475em);
}
.back .cr-3 .s3 {
  transform: rotateY(333deg) translate3D(-50%, 0, 2.475em);
}
.back .cr-3 .s4 {
  transform: rotateY(351deg) translate3D(-50%, 0, 2.475em);
}
.back .side {
  width:0.8169222016226814em;
}
/* .mid styles */
.mid {
  transform:translate3D(0em, 0em, 0em) rotateX(0deg) rotateY(0deg) rotateZ(0deg);
  opacity:1;
  width:16.5em;
  height:1.75em;
  margin:-0.875em 0 0 -8.25em;
}
.mid .ft {
  transform:translateZ(16.25em);
}
.mid .bk {
  transform:translateZ(-16.25em) rotateY(180deg);
}
.mid .rt, .mid .lt {
  width:32.5em;
  height:1.75em;
}
.mid .tp, .mid .bm {
  width:16.5em;
  height:32.5em;
}
.mid .face {
  background-color:#d4d1cf;
}
.mid .ft {
  width:11.25em;
  margin-left:2.625em;
}
.mid .bk {
  width:11.25em;
  margin-left:-2.625em;
}
.mid .rt, .mid .lt {
  width:27.25em;
}
.mid .tp, .mid .bm, .mid .tp .photon-shader, .mid .bm .photon-shader {
  border-radius:2.625em;
}
.mid .cr {
  width:2.625em;
  left:1.3125em;
}
.mid .cr-0 {
  transform: translate3D(11.25em, 0, 13.625em);
}
.mid .cr-1 {
  transform: translate3D(11.25em, 0, -13.625em);
}
.mid .cr-2 {
  transform: translate3D(0, 0, -13.625em);
}
.mid .cr-3 {
  transform: translate3D(0, 0, 13.625em);
}
.mid .cr-0 .s0 {
  transform: rotateY(9deg) translate3D(-50%, 0, 2.6em);
}
.mid .cr-0 .s1 {
  transform: rotateY(27deg) translate3D(-50%, 0, 2.6em);
}
.mid .cr-0 .s2 {
  transform: rotateY(45deg) translate3D(-50%, 0, 2.6em);
}
.mid .cr-0 .s3 {
  transform: rotateY(63deg) translate3D(-50%, 0, 2.6em);
}
.mid .cr-0 .s4 {
  transform: rotateY(81deg) translate3D(-50%, 0, 2.6em);
}
.mid .cr-1 .s0 {
  transform: rotateY(99deg) translate3D(-50%, 0, 2.6em);
}
.mid .cr-1 .s1 {
  transform: rotateY(117deg) translate3D(-50%, 0, 2.6em);
}
.mid .cr-1 .s2 {
  transform: rotateY(135deg) translate3D(-50%, 0, 2.6em);
}
.mid .cr-1 .s3 {
  transform: rotateY(153deg) translate3D(-50%, 0, 2.6em);
}
.mid .cr-1 .s4 {
  transform: rotateY(171deg) translate3D(-50%, 0, 2.6em);
}
.mid .cr-2 .s0 {
  transform: rotateY(189deg) translate3D(-50%, 0, 2.6em);
}
.mid .cr-2 .s1 {
  transform: rotateY(207deg) translate3D(-50%, 0, 2.6em);
}
.mid .cr-2 .s2 {
  transform: rotateY(225deg) translate3D(-50%, 0, 2.6em);
}
.mid .cr-2 .s3 {
  transform: rotateY(243deg) translate3D(-50%, 0, 2.6em);
}
.mid .cr-2 .s4 {
  transform: rotateY(261deg) translate3D(-50%, 0, 2.6em);
}
.mid .cr-3 .s0 {
  transform: rotateY(279deg) translate3D(-50%, 0, 2.6em);
}
.mid .cr-3 .s1 {
  transform: rotateY(297deg) translate3D(-50%, 0, 2.6em);
}
.mid .cr-3 .s2 {
  transform: rotateY(315deg) translate3D(-50%, 0, 2.6em);
}
.mid .cr-3 .s3 {
  transform: rotateY(333deg) translate3D(-50%, 0, 2.6em);
}
.mid .cr-3 .s4 {
  transform: rotateY(351deg) translate3D(-50%, 0, 2.6em);
}
.mid .side {
  width:0.8565183117038154em;
}
/* .top styles */
.top {
  transform:translate3D(0em, -1.1em, 0em) rotateX(0deg) rotateY(0deg) rotateZ(0deg);
  opacity:1;
  width:16em;
  height:.45em;
  margin:-0.225em 0 0 -8em;
}
.top .ft {
  transform:translateZ(16em);
}
.top .bk {
  transform:translateZ(-16em) rotateY(180deg);
}
.top .rt, .top .lt {
  width:32em;
  height:.45em;
}
.top .tp, .top .bm {
  width:16em;
  height:32em;
}
.top .face {
  background-color:#303030;
}
.top .tp {
  background:url(http://tridiv.com/demos/iphone4S/top.png);
}
.top .ft {
  width:11em;
  margin-left:2.5em;
}
.top .bk {
  width:11em;
  margin-left:-2.5em;
}
.top .rt, .top .lt {
  width:27em;
}
.top .tp, .top .bm, .top .tp .photon-shader, .top .bm .photon-shader {
  border-radius:2.5em;
}
.top .cr {
  width:2.5em;
  left:1.25em;
}
.top .cr-0 {
  transform: translate3D(11em, 0, 13.5em);
}
.top .cr-1 {
  transform: translate3D(11em, 0, -13.5em);
}
.top .cr-2 {
  transform: translate3D(0, 0, -13.5em);
}
.top .cr-3 {
  transform: translate3D(0, 0, 13.5em);
}
.top .cr-0 .s0 {
  transform: rotateY(9deg) translate3D(-50%, 0, 2.475em);
}
.top .cr-0 .s1 {
  transform: rotateY(27deg) translate3D(-50%, 0, 2.475em);
}
.top .cr-0 .s2 {
  transform: rotateY(45deg) translate3D(-50%, 0, 2.475em);
}
.top .cr-0 .s3 {
  transform: rotateY(63deg) translate3D(-50%, 0, 2.475em);
}
.top .cr-0 .s4 {
  transform: rotateY(81deg) translate3D(-50%, 0, 2.475em);
}
.top .cr-1 .s0 {
  transform: rotateY(99deg) translate3D(-50%, 0, 2.475em);
}
.top .cr-1 .s1 {
  transform: rotateY(117deg) translate3D(-50%, 0, 2.475em);
}
.top .cr-1 .s2 {
  transform: rotateY(135deg) translate3D(-50%, 0, 2.475em);
}
.top .cr-1 .s3 {
  transform: rotateY(153deg) translate3D(-50%, 0, 2.475em);
}
.top .cr-1 .s4 {
  transform: rotateY(171deg) translate3D(-50%, 0, 2.475em);
}
.top .cr-2 .s0 {
  transform: rotateY(189deg) translate3D(-50%, 0, 2.475em);
}
.top .cr-2 .s1 {
  transform: rotateY(207deg) translate3D(-50%, 0, 2.475em);
}
.top .cr-2 .s2 {
  transform: rotateY(225deg) translate3D(-50%, 0, 2.475em);
}
.top .cr-2 .s3 {
  transform: rotateY(243deg) translate3D(-50%, 0, 2.475em);
}
.top .cr-2 .s4 {
  transform: rotateY(261deg) translate3D(-50%, 0, 2.475em);
}
.top .cr-3 .s0 {
  transform: rotateY(279deg) translate3D(-50%, 0, 2.475em);
}
.top .cr-3 .s1 {
  transform: rotateY(297deg) translate3D(-50%, 0, 2.475em);
}
.top .cr-3 .s2 {
  transform: rotateY(315deg) translate3D(-50%, 0, 2.475em);
}
.top .cr-3 .s3 {
  transform: rotateY(333deg) translate3D(-50%, 0, 2.475em);
}
.top .cr-3 .s4 {
  transform: rotateY(351deg) translate3D(-50%, 0, 2.475em);
}
.top .side {
  width:0.8169222016226814em;
}
/* .lock styles */
.lock {
  transform:translate3D(-8.38em, 0em, -12.5em) rotateX(0deg) rotateY(0deg) rotateZ(-90deg);
  opacity:1;
  width:.5em;
  height:.25em;
  margin:-0.125em 0 0 -0.25em;
}
.lock .ft {
  transform:translateZ(0.75em);
}
.lock .bk {
  transform:translateZ(-0.75em) rotateY(180deg);
}
.lock .rt, .lock .lt {
  width:1.5em;
  height:.25em;
}
.lock .tp, .lock .bm {
  width:.5em;
  height:1.5em;
}
.lock .face {
  background-color:#cbc8c6;
}
.lock .ft {
  width:0em;
  margin-left:.25em;
}
.lock .bk {
  width:0em;
  margin-left:-0.25em;
}
.lock .rt, .lock .lt {
  width:1em;
}
.lock .tp, .lock .bm, .lock .tp .photon-shader, .lock .bm .photon-shader {
  border-radius:.25em;
}
.lock .cr {
  width:.25em;
  left:0.125em;
}
.lock .cr-0 {
  transform: translate3D(0em, 0, 0.5em);
}
.lock .cr-1 {
  transform: translate3D(0em, 0, -0.5em);
}
.lock .cr-2 {
  transform: translate3D(0, 0, -0.5em);
}
.lock .cr-3 {
  transform: translate3D(0, 0, 0.5em);
}
.lock .cr-0 .s0 {
  transform: rotateY(15deg) translate3D(-50%, 0, 0.225em);
}
.lock .cr-0 .s1 {
  transform: rotateY(45deg) translate3D(-50%, 0, 0.225em);
}
.lock .cr-0 .s2 {
  transform: rotateY(75deg) translate3D(-50%, 0, 0.225em);
}
.lock .cr-1 .s0 {
  transform: rotateY(105deg) translate3D(-50%, 0, 0.225em);
}
.lock .cr-1 .s1 {
  transform: rotateY(135deg) translate3D(-50%, 0, 0.225em);
}
.lock .cr-1 .s2 {
  transform: rotateY(165deg) translate3D(-50%, 0, 0.225em);
}
.lock .cr-2 .s0 {
  transform: rotateY(195deg) translate3D(-50%, 0, 0.225em);
}
.lock .cr-2 .s1 {
  transform: rotateY(225deg) translate3D(-50%, 0, 0.225em);
}
.lock .cr-2 .s2 {
  transform: rotateY(255deg) translate3D(-50%, 0, 0.225em);
}
.lock .cr-3 .s0 {
  transform: rotateY(285deg) translate3D(-50%, 0, 0.225em);
}
.lock .cr-3 .s1 {
  transform: rotateY(315deg) translate3D(-50%, 0, 0.225em);
}
.lock .cr-3 .s2 {
  transform: rotateY(345deg) translate3D(-50%, 0, 0.225em);
}
.lock .side {
  width:0.15897459621556134em;
}
/* .btn-plus styles */
.btn-plus {
  transform:translate3D(-8.38em, 0em, -9.5em) rotateX(0deg) rotateY(0deg) rotateZ(-90deg);
  opacity:1;
  width:1.25em;
  height:0.25em;
  margin:-0.125em 0 0 -0.625em;
}
.btn-plus .tp, .btn-plus .bm {
  width:1.25em;
  height:1.25em;
}
.btn-plus .side {
  width:0.3599364905389034em;
  height:0.25em;
}
.btn-plus .s0 {
  transform: rotateY(15deg) translate3D(-50%, 0, 0.6em);
}
.btn-plus .s1 {
  transform: rotateY(45deg) translate3D(-50%, 0, 0.6em);
}
.btn-plus .s2 {
  transform: rotateY(75deg) translate3D(-50%, 0, 0.6em);
}
.btn-plus .s3 {
  transform: rotateY(105deg) translate3D(-50%, 0, 0.6em);
}
.btn-plus .s4 {
  transform: rotateY(135deg) translate3D(-50%, 0, 0.6em);
}
.btn-plus .s5 {
  transform: rotateY(165deg) translate3D(-50%, 0, 0.6em);
}
.btn-plus .s6 {
  transform: rotateY(195deg) translate3D(-50%, 0, 0.6em);
}
.btn-plus .s7 {
  transform: rotateY(225deg) translate3D(-50%, 0, 0.6em);
}
.btn-plus .s8 {
  transform: rotateY(255deg) translate3D(-50%, 0, 0.6em);
}
.btn-plus .s9 {
  transform: rotateY(285deg) translate3D(-50%, 0, 0.6em);
}
.btn-plus .s10 {
  transform: rotateY(315deg) translate3D(-50%, 0, 0.6em);
}
.btn-plus .s11 {
  transform: rotateY(345deg) translate3D(-50%, 0, 0.6em);
}
.btn-plus .face, .btn-plus .side {
  background-color:#cbc8c6;
}
/* .btn-less styles */
.btn-less {
  transform:translate3D(-8.38em, 0em, -7em) rotateX(0deg) rotateY(0deg) rotateZ(-90deg);
  opacity:1;
  width:1.25em;
  height:0.25em;
  margin:-0.125em 0 0 -0.625em;
}
.btn-less .tp, .btn-less .bm {
  width:1.25em;
  height:1.25em;
}
.btn-less .side {
  width:0.3599364905389034em;
  height:0.25em;
}
.btn-less .s0 {
  transform: rotateY(15deg) translate3D(-50%, 0, 0.6em);
}
.btn-less .s1 {
  transform: rotateY(45deg) translate3D(-50%, 0, 0.6em);
}
.btn-less .s2 {
  transform: rotateY(75deg) translate3D(-50%, 0, 0.6em);
}
.btn-less .s3 {
  transform: rotateY(105deg) translate3D(-50%, 0, 0.6em);
}
.btn-less .s4 {
  transform: rotateY(135deg) translate3D(-50%, 0, 0.6em);
}
.btn-less .s5 {
  transform: rotateY(165deg) translate3D(-50%, 0, 0.6em);
}
.btn-less .s6 {
  transform: rotateY(195deg) translate3D(-50%, 0, 0.6em);
}
.btn-less .s7 {
  transform: rotateY(225deg) translate3D(-50%, 0, 0.6em);
}
.btn-less .s8 {
  transform: rotateY(255deg) translate3D(-50%, 0, 0.6em);
}
.btn-less .s9 {
  transform: rotateY(285deg) translate3D(-50%, 0, 0.6em);
}
.btn-less .s10 {
  transform: rotateY(315deg) translate3D(-50%, 0, 0.6em);
}
.btn-less .s11 {
  transform: rotateY(345deg) translate3D(-50%, 0, 0.6em);
}
.btn-less .face, .btn-less .side {
  background-color:#cbc8c6;
}
/* .power styles */
.power {
  transform:translate3D(3.5em, 0em, -16.38em) rotateX(0deg) rotateY(-90deg) rotateZ(-90deg);
  opacity:1;
  width:.5em;
  height:.25em;
  margin:-0.125em 0 0 -0.25em;
}
.power .ft {
  transform:translateZ(1.375em);
}
.power .bk {
  transform:translateZ(-1.375em) rotateY(180deg);
}
.power .rt, .power .lt {
  width:2.75em;
  height:.25em;
}
.power .tp, .power .bm {
  width:.5em;
  height:2.75em;
}
.power .face {
  background-color:#cbc8c6;
}
.power .ft {
  width:0em;
  margin-left:.25em;
}
.power .bk {
  width:0em;
  margin-left:-0.25em;
}
.power .rt, .power .lt {
  width:2.25em;
}
.power .tp, .power .bm, .power .tp .photon-shader, .power .bm .photon-shader {
  border-radius:.25em;
}
.power .cr {
  width:.25em;
  left:0.125em;
}
.power .cr-0 {
  transform: translate3D(0em, 0, 1.125em);
}
.power .cr-1 {
  transform: translate3D(0em, 0, -1.125em);
}
.power .cr-2 {
  transform: translate3D(0, 0, -1.125em);
}
.power .cr-3 {
  transform: translate3D(0, 0, 1.125em);
}
.power .cr-0 .s0 {
  transform: rotateY(15deg) translate3D(-50%, 0, 0.225em);
}
.power .cr-0 .s1 {
  transform: rotateY(45deg) translate3D(-50%, 0, 0.225em);
}
.power .cr-0 .s2 {
  transform: rotateY(75deg) translate3D(-50%, 0, 0.225em);
}
.power .cr-1 .s0 {
  transform: rotateY(105deg) translate3D(-50%, 0, 0.225em);
}
.power .cr-1 .s1 {
  transform: rotateY(135deg) translate3D(-50%, 0, 0.225em);
}
.power .cr-1 .s2 {
  transform: rotateY(165deg) translate3D(-50%, 0, 0.225em);
}
.power .cr-2 .s0 {
  transform: rotateY(195deg) translate3D(-50%, 0, 0.225em);
}
.power .cr-2 .s1 {
  transform: rotateY(225deg) translate3D(-50%, 0, 0.225em);
}
.power .cr-2 .s2 {
  transform: rotateY(255deg) translate3D(-50%, 0, 0.225em);
}
.power .cr-3 .s0 {
  transform: rotateY(285deg) translate3D(-50%, 0, 0.225em);
}
.power .cr-3 .s1 {
  transform: rotateY(315deg) translate3D(-50%, 0, 0.225em);
}
.power .cr-3 .s2 {
  transform: rotateY(345deg) translate3D(-50%, 0, 0.225em);
}
.power .side {
  width:0.15897459621556134em;
}
/* .cub-8 styles */
.cub-8 {
  transform:translate3D(0em, -1.1em, 0em) rotateX(0deg) rotateY(0deg) rotateZ(0deg);
  opacity:1;
  width:14em;
  height:.4em;
  margin:-0.2em 0 0 -7em;
}
.cub-8 .ft {
  transform:translateZ(10.5em);
}
.cub-8 .bk {
  transform:translateZ(-10.5em) rotateY(180deg);
}
.cub-8 .rt, .cub-8 .lt {
  width:21em;
  height:.4em;
}
.cub-8 .tp, .cub-8 .bm {
  width:14em;
  height:21em;
}
.cub-8 .face {
  background-color:#FFFFFF;
}
.cub-8 .tp {
  background:url(http://tridiv.com/demos/iphone4S/screen.png);
}
        </style>
    </head>
    <body>
       <div id="tridiv">
        <div class="scene" style="-webkit-transform:rotateX(327deg) rotateY(254deg); -moz-transform:rotateX(327deg) rotateY(254deg); -ms-transform:rotateX(327deg) rotateY(254deg); transform:rotateX(327deg) rotateY(254deg); ">
          <div class="shape cuboid-1 back">
            <div class="face ft">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face bk">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face rt">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face lt">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face bm">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face tp">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="cr cr-0">
              <div class="face side s0">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.337255);"></div>
              </div>
              <div class="face side s1">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.239216);"></div>
              </div>
              <div class="face side s2">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.137255);"></div>
              </div>
              <div class="face side s3">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.0470588);"></div>
              </div>
              <div class="face side s4">
                <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.027451);"></div>
              </div>
            </div>
            <div class="cr cr-1">
              <div class="face side s0">
                <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.0745098);"></div>
              </div>
              <div class="face side s1">
                <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.0666667);"></div>
              </div>
              <div class="face side s2">
                <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.0117647);"></div>
              </div>
              <div class="face side s3">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.0666667);"></div>
              </div>
              <div class="face side s4">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.160784);"></div>
              </div>
            </div>
            <div class="cr cr-2">
              <div class="face side s0">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.258824);"></div>
              </div>
              <div class="face side s1">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.360784);"></div>
              </div>
              <div class="face side s2">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.458824);"></div>
              </div>
              <div class="face side s3">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.552941);"></div>
              </div>
              <div class="face side s4">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.631373);"></div>
              </div>
            </div>
            <div class="cr cr-3">
              <div class="face side s0">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.67451);"></div>
              </div>
              <div class="face side s1">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.670588);"></div>
              </div>
              <div class="face side s2">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.615686);"></div>
              </div>
              <div class="face side s3">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.533333);"></div>
              </div>
              <div class="face side s4">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.439216);"></div>
              </div>
            </div>
          </div>
          <div class="shape cuboid-2 mid">
            <div class="face ft">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face bk">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face rt">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face lt">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face bm">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face tp">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="cr cr-0">
              <div class="face side s0">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.337255);"></div>
              </div>
              <div class="face side s1">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.239216);"></div>
              </div>
              <div class="face side s2">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.137255);"></div>
              </div>
              <div class="face side s3">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.0470588);"></div>
              </div>
              <div class="face side s4">
                <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.027451);"></div>
              </div>
            </div>
            <div class="cr cr-1">
              <div class="face side s0">
                <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.0745098);"></div>
              </div>
              <div class="face side s1">
                <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.0666667);"></div>
              </div>
              <div class="face side s2">
                <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.0117647);"></div>
              </div>
              <div class="face side s3">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.0666667);"></div>
              </div>
              <div class="face side s4">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.160784);"></div>
              </div>
            </div>
            <div class="cr cr-2">
              <div class="face side s0">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.258824);"></div>
              </div>
              <div class="face side s1">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.360784);"></div>
              </div>
              <div class="face side s2">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.458824);"></div>
              </div>
              <div class="face side s3">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.552941);"></div>
              </div>
              <div class="face side s4">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.631373);"></div>
              </div>
            </div>
            <div class="cr cr-3">
              <div class="face side s0">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.67451);"></div>
              </div>
              <div class="face side s1">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.670588);"></div>
              </div>
              <div class="face side s2">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.615686);"></div>
              </div>
              <div class="face side s3">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.533333);"></div>
              </div>
              <div class="face side s4">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.439216);"></div>
              </div>
            </div>
          </div>
          <div class="shape cuboid-3 top">
            <div class="face ft">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face bk">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face rt">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face lt">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face bm">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face tp">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="cr cr-0">
              <div class="face side s0">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.337255);"></div>
              </div>
              <div class="face side s1">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.239216);"></div>
              </div>
              <div class="face side s2">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.137255);"></div>
              </div>
              <div class="face side s3">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.0470588);"></div>
              </div>
              <div class="face side s4">
                <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.027451);"></div>
              </div>
            </div>
            <div class="cr cr-1">
              <div class="face side s0">
                <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.0745098);"></div>
              </div>
              <div class="face side s1">
                <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.0666667);"></div>
              </div>
              <div class="face side s2">
                <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.0117647);"></div>
              </div>
              <div class="face side s3">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.0666667);"></div>
              </div>
              <div class="face side s4">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.160784);"></div>
              </div>
            </div>
            <div class="cr cr-2">
              <div class="face side s0">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.258824);"></div>
              </div>
              <div class="face side s1">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.360784);"></div>
              </div>
              <div class="face side s2">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.458824);"></div>
              </div>
              <div class="face side s3">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.552941);"></div>
              </div>
              <div class="face side s4">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.631373);"></div>
              </div>
            </div>
            <div class="cr cr-3">
              <div class="face side s0">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.67451);"></div>
              </div>
              <div class="face side s1">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.670588);"></div>
              </div>
              <div class="face side s2">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.615686);"></div>
              </div>
              <div class="face side s3">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.533333);"></div>
              </div>
              <div class="face side s4">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.439216);"></div>
              </div>
            </div>
          </div>
          <div class="shape cuboid-4 lock">
            <div class="face ft">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face bk">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face rt">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face lt">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face bm">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face tp">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="cr cr-0">
              <div class="face side s0">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.305882);"></div>
              </div>
              <div class="face side s1">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.137255);"></div>
              </div>
              <div class="face side s2">
                <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.00392157);"></div>
              </div>
            </div>
            <div class="cr cr-1">
              <div class="face side s0">
                <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.0784314);"></div>
              </div>
              <div class="face side s1">
                <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.0117647);"></div>
              </div>
              <div class="face side s2">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.129412);"></div>
              </div>
            </div>
            <div class="cr cr-2">
              <div class="face side s0">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.294118);"></div>
              </div>
              <div class="face side s1">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.458824);"></div>
              </div>
              <div class="face side s2">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.607843);"></div>
              </div>
            </div>
            <div class="cr cr-3">
              <div class="face side s0">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.682353);"></div>
              </div>
              <div class="face side s1">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.615686);"></div>
              </div>
              <div class="face side s2">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.470588);"></div>
              </div>
            </div>
          </div>
          <div class="shape cylinder-1 btn-plus">
            <div class="face bm">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face tp">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face side s0">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.305882);"></div>
            </div>
            <div class="face side s1">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.137255);"></div>
            </div>
            <div class="face side s2">
              <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.00392157);"></div>
            </div>
            <div class="face side s3">
              <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.0784314);"></div>
            </div>
            <div class="face side s4">
              <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.0117647);"></div>
            </div>
            <div class="face side s5">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.129412);"></div>
            </div>
            <div class="face side s6">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.294118);"></div>
            </div>
            <div class="face side s7">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.458824);"></div>
            </div>
            <div class="face side s8">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.607843);"></div>
            </div>
            <div class="face side s9">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.682353);"></div>
            </div>
            <div class="face side s10">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.615686);"></div>
            </div>
            <div class="face side s11">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.470588);"></div>
            </div>
          </div>
          <div class="shape cylinder-2 btn-less">
            <div class="face bm">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face tp">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face side s0">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.305882);"></div>
            </div>
            <div class="face side s1">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.137255);"></div>
            </div>
            <div class="face side s2">
              <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.00392157);"></div>
            </div>
            <div class="face side s3">
              <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.0784314);"></div>
            </div>
            <div class="face side s4">
              <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.0117647);"></div>
            </div>
            <div class="face side s5">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.129412);"></div>
            </div>
            <div class="face side s6">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.294118);"></div>
            </div>
            <div class="face side s7">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.458824);"></div>
            </div>
            <div class="face side s8">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.607843);"></div>
            </div>
            <div class="face side s9">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.682353);"></div>
            </div>
            <div class="face side s10">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.615686);"></div>
            </div>
            <div class="face side s11">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.470588);"></div>
            </div>
          </div>
          <div class="shape cuboid-5 power">
            <div class="face ft">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face bk">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face rt">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face lt">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face bm">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face tp">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="cr cr-0">
              <div class="face side s0">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.305882);"></div>
              </div>
              <div class="face side s1">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.137255);"></div>
              </div>
              <div class="face side s2">
                <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.00392157);"></div>
              </div>
            </div>
            <div class="cr cr-1">
              <div class="face side s0">
                <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.0784314);"></div>
              </div>
              <div class="face side s1">
                <div class="photon-shader" style="background-color: rgba(255, 255, 255, 0.0117647);"></div>
              </div>
              <div class="face side s2">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.129412);"></div>
              </div>
            </div>
            <div class="cr cr-2">
              <div class="face side s0">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.294118);"></div>
              </div>
              <div class="face side s1">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.458824);"></div>
              </div>
              <div class="face side s2">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.607843);"></div>
              </div>
            </div>
            <div class="cr cr-3">
              <div class="face side s0">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.682353);"></div>
              </div>
              <div class="face side s1">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.615686);"></div>
              </div>
              <div class="face side s2">
                <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.470588);"></div>
              </div>
            </div>
          </div>
          <div class="shape cuboid-6 cub-8">
            <div class="face ft">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face bk">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face rt">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face lt">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face bm">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
            <div class="face tp">
              <div class="photon-shader" style="background-color: rgba(0, 0, 0, 0.388235);"></div>
            </div>
          </div>
        </div>
      </div>
    </body>
</html>
