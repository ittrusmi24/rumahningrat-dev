(function(){
    var script = {
 "start": "this.playAudioList([this.audio_01590D1A_155B_A128_41B1_485364B4AF1A]); this.init(); this.visibleComponentsIfPlayerFlagEnabled([this.IconButton_1A31C44D_1556_E728_41A4_7406C2F29419], 'gyroscopeAvailable'); this.syncPlaylists([this.playList_015ECD63_0C4C_28E9_41A1_B73E17CADFA6,this.mainPlayList]); if(!this.get('fullscreenAvailable')) { [this.IconButton_1A30344D_1556_E728_4168_08B49CEA2A64].forEach(function(component) { component.set('visible', false); }) }",
 "horizontalAlign": "left",
 "scrollBarOpacity": 0.5,
 "id": "rootPlayer",
 "children": [
  "this.MainViewer",
  {
   "horizontalAlign": "center",
   "scrollBarOpacity": 0.5,
   "left": 0,
   "children": [
    {
     "horizontalAlign": "center",
     "itemLabelPosition": "bottom",
     "maxWidth": 800,
     "itemBorderRadius": 0,
     "backgroundOpacity": 0.12,
     "width": 786,
     "scrollBarMargin": 2,
     "class": "ThumbnailList",
     "itemVerticalAlign": "middle",
     "paddingLeft": 20,
     "itemPaddingLeft": 3,
     "minHeight": 0,
     "propagateClick": false,
     "scrollBarWidth": 10,
     "verticalAlign": "top",
     "selectedItemBackgroundOpacity": 0,
     "itemOpacity": 1,
     "itemBorderSize": 0,
     "height": 127,
     "playList": "this.playList_015ECD63_0C4C_28E9_41A1_B73E17CADFA6",
     "itemThumbnailShadowSpread": 1,
     "minWidth": 0,
     "backgroundColor": [
      "#000000"
     ],
     "itemBackgroundColor": [],
     "itemThumbnailOpacity": 1,
     "itemBackgroundColorRatios": [],
     "itemPaddingTop": 3,
     "borderSize": 0,
     "itemPaddingRight": 3,
     "rollOverItemBackgroundOpacity": 0,
     "itemThumbnailShadowHorizontalLength": 2,
     "backgroundColorDirection": "vertical",
     "itemThumbnailShadowOpacity": 0.24,
     "scrollBarColor": "#FFFFFF",
     "shadow": false,
     "itemLabelTextDecoration": "none",
     "itemBackgroundOpacity": 0,
     "scrollBarOpacity": 0.45,
     "itemLabelFontWeight": "bold",
     "maxHeight": 600,
     "layout": "horizontal",
     "itemThumbnailHeight": 75,
     "scrollBarVisible": "rollOver",
     "itemThumbnailScaleMode": "fit_outside",
     "itemLabelFontSize": "10.0098px",
     "itemThumbnailShadowVerticalLength": 2,
     "rollOverItemThumbnailShadow": true,
     "itemThumbnailShadowBlurRadius": 10,
     "paddingRight": 20,
     "itemLabelGap": 5,
     "borderRadius": 5,
     "backgroundColorRatios": [
      0
     ],
     "itemBorderColor": "#FFFFFF",
     "itemBackgroundColorDirection": "vertical",
     "itemThumbnailShadow": true,
     "itemThumbnailWidth": 100,
     "itemLabelFontColor": "#FFFFFF",
     "itemHorizontalAlign": "center",
     "gap": 10,
     "selectedItemLabelFontWeight": "bold",
     "itemThumbnailShadowColor": "#000000",
     "paddingBottom": 10,
     "itemPaddingBottom": 3,
     "paddingTop": 10,
     "itemLabelHorizontalAlign": "center",
     "itemLabelFontStyle": "normal",
     "itemMode": "normal",
     "data": {
      "name": "ThumbnailList468"
     },
     "itemThumbnailBorderRadius": 0,
     "itemLabelFontFamily": "Open Sans"
    }
   ],
   "scrollBarVisible": "rollOver",
   "backgroundOpacity": 0,
   "right": 0,
   "scrollBarMargin": 2,
   "class": "Container",
   "paddingRight": 0,
   "paddingLeft": 0,
   "borderRadius": 0,
   "overflow": "visible",
   "minHeight": 20,
   "scrollBarWidth": 10,
   "propagateClick": false,
   "verticalAlign": "bottom",
   "bottom": 0,
   "height": 200,
   "minWidth": 20,
   "layout": "horizontal",
   "paddingTop": 0,
   "paddingBottom": 0,
   "gap": 10,
   "borderSize": 0,
   "contentOpaque": false,
   "scrollBarColor": "#000000",
   "data": {
    "name": "Container467"
   },
   "shadow": false
  },
  "this.Container_1A30744E_1556_E728_41AB_86285F533B01"
 ],
 "scrollBarVisible": "rollOver",
 "overflow": "visible",
 "width": "100%",
 "scrollBarMargin": 2,
 "class": "Player",
 "borderRadius": 0,
 "buttonToggleMute": "this.IconButton_1A31D44D_1556_E728_41A0_2B066A934CE7",
 "paddingLeft": 0,
 "paddingRight": 0,
 "propagateClick": false,
 "minHeight": 20,
 "scrollBarWidth": 10,
 "desktopMipmappingEnabled": false,
 "mobileMipmappingEnabled": false,
 "vrPolyfillScale": 0.5,
 "verticalAlign": "top",
 "minWidth": 20,
 "layout": "absolute",
 "definitions": [{
 "initialPosition": {
  "yaw": -141.53,
  "hfov": 125,
  "class": "PanoramaCameraPosition",
  "pitch": 0
 },
 "initialSequence": {
  "movements": [
   {
    "targetYaw": 93.68,
    "path": "shortest",
    "targetPitch": -20.46,
    "pitchSpeed": 36.67,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 72.67
   },
   {
    "targetYaw": 30.27,
    "path": "shortest",
    "targetPitch": -27.01,
    "pitchSpeed": 10.63,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 20.35
   },
   {
    "targetYaw": -87.55,
    "path": "shortest",
    "targetPitch": -25.78,
    "pitchSpeed": 10.63,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 20.35
   },
   {
    "targetYaw": 154.64,
    "path": "shortest",
    "targetPitch": -15.94,
    "pitchSpeed": 17.05,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 33.25
   }
  ],
  "class": "PanoramaCameraSequence",
  "restartMovementOnUserInteraction": false
 },
 "automaticZoomSpeed": 10,
 "id": "camera_3269E554_24CF_CBB7_4194_3E3BC7931154",
 "class": "PanoramaCamera"
},
{
 "initialPosition": {
  "yaw": 112.77,
  "hfov": 125,
  "class": "PanoramaCameraPosition",
  "pitch": 0
 },
 "initialSequence": {
  "movements": [
   {
    "targetYaw": 120.27,
    "path": "shortest",
    "targetPitch": -18.82,
    "pitchSpeed": 2.58,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 4.18
   },
   {
    "targetYaw": 51.95,
    "path": "shortest",
    "targetPitch": -22.5,
    "pitchSpeed": 6.35,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 11.75
   },
   {
    "targetYaw": -16.77,
    "path": "shortest",
    "targetPitch": -23.32,
    "pitchSpeed": 6.35,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 11.75
   }
  ],
  "class": "PanoramaCameraSequence",
  "restartMovementOnUserInteraction": false
 },
 "automaticZoomSpeed": 10,
 "id": "camera_3293E50A_24CF_CB93_41BF_D06A403AB9B9",
 "class": "PanoramaCamera"
},
{
 "frames": [
  {
   "front": {
    "levels": [
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0/f/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0/f/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0/f/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0/f/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "left": {
    "levels": [
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0/l/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0/l/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0/l/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0/l/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "top": {
    "levels": [
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0/u/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0/u/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0/u/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0/u/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "right": {
    "levels": [
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0/r/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0/r/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0/r/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0/r/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "back": {
    "levels": [
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0/b/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0/b/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0/b/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0/b/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "bottom": {
    "levels": [
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0/d/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0/d/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0/d/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0/d/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "class": "CubicPanoramaFrame",
   "thumbnailUrl": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_t.jpg"
  }
 ],
 "label": "KAMAR TIDUR ANAK",
 "id": "panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285",
 "thumbnailUrl": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_t.jpg",
 "hfovMin": "120%",
 "overlays": [
  "this.overlay_2B0C2A58_24BF_59BE_41B5_445E1C49767A"
 ],
 "partial": false,
 "adjacentPanoramas": [
  {
   "yaw": -119.53,
   "class": "AdjacentPanorama",
   "backwardYaw": -15.12,
   "panorama": "this.panorama_3104768E_24FD_D693_41C0_83B9D3815E1E",
   "distance": 1
  }
 ],
 "hfov": 360,
 "pitch": 0,
 "class": "Panorama",
 "vfov": 180,
 "hfovMax": 130
},
{
 "frames": [
  {
   "front": {
    "levels": [
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0/f/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0/f/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0/f/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0/f/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "left": {
    "levels": [
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0/l/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0/l/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0/l/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0/l/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "top": {
    "levels": [
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0/u/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0/u/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0/u/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0/u/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "right": {
    "levels": [
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0/r/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0/r/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0/r/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0/r/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "back": {
    "levels": [
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0/b/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0/b/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0/b/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0/b/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "bottom": {
    "levels": [
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0/d/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0/d/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0/d/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0/d/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "class": "CubicPanoramaFrame",
   "thumbnailUrl": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_t.jpg"
  }
 ],
 "label": "KAMAR TIDUR UTAMA",
 "id": "panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC",
 "thumbnailUrl": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_t.jpg",
 "hfovMin": "120%",
 "overlays": [
  "this.overlay_2BCE4CF7_24BC_BA71_41A5_0F9114AEFFB5",
  "this.overlay_34AC384E_24B4_F993_41BB_3588E32E76AD"
 ],
 "partial": false,
 "adjacentPanoramas": [
  {
   "yaw": -67.23,
   "class": "AdjacentPanorama",
   "backwardYaw": 41.73,
   "panorama": "this.panorama_3104768E_24FD_D693_41C0_83B9D3815E1E",
   "distance": 1
  }
 ],
 "hfov": 360,
 "pitch": 0,
 "class": "Panorama",
 "vfov": 180,
 "hfovMax": 130
},
{
 "initialPosition": {
  "yaw": 12.68,
  "hfov": 125,
  "class": "PanoramaCameraPosition",
  "pitch": -26.59
 },
 "initialSequence": {
  "movements": [
   {
    "targetYaw": 91.23,
    "path": "shortest",
    "targetPitch": -24.95,
    "pitchSpeed": 6.35,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 11.75
   },
   {
    "targetYaw": -141.14,
    "path": "shortest",
    "targetPitch": -1.23,
    "pitchSpeed": 7.42,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 13.9
   }
  ],
  "class": "PanoramaCameraSequence",
  "restartMovementOnUserInteraction": false
 },
 "automaticZoomSpeed": 10,
 "id": "panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_camera",
 "class": "PanoramaCamera"
},
{
 "displayOriginPosition": {
  "yaw": -33.17,
  "hfov": 165,
  "class": "RotationalCameraDisplayPosition",
  "stereographicFactor": 1,
  "pitch": -90
 },
 "initialPosition": {
  "yaw": -33.17,
  "hfov": 125,
  "class": "PanoramaCameraPosition",
  "pitch": -1.23
 },
 "initialSequence": {
  "movements": [
   {
    "targetYaw": -69.83,
    "path": "shortest",
    "targetPitch": -2.97,
    "pitchSpeed": 4.21,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 7.45
   }
  ],
  "class": "PanoramaCameraSequence",
  "restartMovementOnUserInteraction": false
 },
 "automaticZoomSpeed": 10,
 "id": "panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_camera",
 "class": "PanoramaCamera",
 "displayMovements": [
  {
   "duration": 1300,
   "class": "TargetRotationalCameraDisplayMovement",
   "easing": "linear"
  },
  {
   "targetHfov": 125,
   "duration": 3500,
   "easing": "cubic_in_out",
   "targetStereographicFactor": 0,
   "class": "TargetRotationalCameraDisplayMovement",
   "targetPitch": -1.23
  }
 ]
},
{
 "frames": [
  {
   "front": {
    "levels": [
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0/f/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0/f/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0/f/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0/f/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "left": {
    "levels": [
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0/l/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0/l/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0/l/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0/l/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "top": {
    "levels": [
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0/u/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0/u/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0/u/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0/u/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "right": {
    "levels": [
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0/r/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0/r/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0/r/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0/r/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "back": {
    "levels": [
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0/b/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0/b/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0/b/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0/b/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "bottom": {
    "levels": [
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0/d/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0/d/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0/d/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0/d/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "class": "CubicPanoramaFrame",
   "thumbnailUrl": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_t.jpg"
  }
 ],
 "label": "RUANG TAMU",
 "id": "panorama_3591A138_24CC_CBFF_4199_26989DD179CA",
 "thumbnailUrl": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_t.jpg",
 "overlays": [
  "this.overlay_3591B138_24CC_CBFF_41A2_040B73BD775A",
  "this.overlay_35915138_24CC_CBFF_41A3_756360B26AEC",
  "this.overlay_35916138_24CC_CBFF_41B3_BA9A5800B6CB",
  "this.overlay_35910138_24CC_CBFF_419F_41A562AB6AD6",
  "this.overlay_33ABFD82_24DD_7A93_41B9_45FAD7A7AC86",
  "this.overlay_3D1E9F18_24D4_D7BF_419F_F576E45600C6"
 ],
 "partial": false,
 "adjacentPanoramas": [
  {
   "panorama": "this.panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC",
   "class": "AdjacentPanorama"
  },
  {
   "panorama": "this.panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285",
   "class": "AdjacentPanorama"
  },
  {
   "panorama": "this.panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6",
   "class": "AdjacentPanorama"
  },
  {
   "yaw": 140.75,
   "class": "AdjacentPanorama",
   "backwardYaw": -7.54,
   "panorama": "this.panorama_304525F7_24B5_4A71_41AB_91025F21903C",
   "distance": 1
  },
  {
   "yaw": 38.47,
   "class": "AdjacentPanorama",
   "backwardYaw": 70.79,
   "panorama": "this.panorama_3104768E_24FD_D693_41C0_83B9D3815E1E",
   "distance": 1
  }
 ],
 "hfov": 360,
 "pitch": 0,
 "class": "Panorama",
 "vfov": 180,
 "hfovMax": 130
},
{
 "initialPosition": {
  "yaw": -138.27,
  "hfov": 125,
  "class": "PanoramaCameraPosition",
  "pitch": 0
 },
 "initialSequence": {
  "movements": [
   {
    "targetYaw": 80.59,
    "hfovSpeed": 119.75,
    "targetHfov": 126,
    "easing": "cubic_in_out",
    "pitchSpeed": 60.1,
    "targetPitch": 12.27,
    "class": "TargetPanoramaCameraMovement",
    "path": "shortest",
    "yawSpeed": 119.75
   },
   {
    "targetYaw": 74.05,
    "path": "shortest",
    "targetPitch": -14.73,
    "pitchSpeed": 8.49,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 16.05
   },
   {
    "targetYaw": -136.64,
    "path": "shortest",
    "targetPitch": -16.36,
    "pitchSpeed": 8.49,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 16.05
   }
  ],
  "class": "PanoramaCameraSequence",
  "restartMovementOnUserInteraction": false
 },
 "automaticZoomSpeed": 10,
 "id": "camera_332CF38C_24CF_CE97_41C1_425E942CCA5F",
 "class": "PanoramaCamera"
},
{
 "initialPosition": {
  "yaw": 164.88,
  "hfov": 125,
  "class": "PanoramaCameraPosition",
  "pitch": 0
 },
 "initialSequence": {
  "movements": [
   {
    "targetYaw": 80.59,
    "hfovSpeed": 47.14,
    "targetHfov": 126,
    "easing": "cubic_in_out",
    "pitchSpeed": 23.96,
    "targetPitch": 12.27,
    "class": "TargetPanoramaCameraMovement",
    "path": "shortest",
    "yawSpeed": 47.14
   },
   {
    "targetYaw": 74.05,
    "path": "shortest",
    "targetPitch": -14.73,
    "pitchSpeed": 8.49,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 16.05
   },
   {
    "targetYaw": -136.64,
    "path": "shortest",
    "targetPitch": -16.36,
    "pitchSpeed": 8.49,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 16.05
   }
  ],
  "class": "PanoramaCameraSequence",
  "restartMovementOnUserInteraction": false
 },
 "automaticZoomSpeed": 10,
 "id": "camera_331BA3CD_24CF_CE91_41AA_239DEF4A26D1",
 "class": "PanoramaCamera"
},
{
 "initialPosition": {
  "yaw": 4.99,
  "hfov": 125,
  "class": "PanoramaCameraPosition",
  "pitch": 0
 },
 "initialSequence": {
  "movements": [
   {
    "targetYaw": -30.72,
    "path": "shortest",
    "targetPitch": -2.87,
    "pitchSpeed": 4.26,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 7.55
   },
   {
    "targetYaw": 28.05,
    "path": "shortest",
    "targetPitch": -0.51,
    "pitchSpeed": 6.35,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 11.75
   }
  ],
  "class": "PanoramaCameraSequence",
  "restartMovementOnUserInteraction": false
 },
 "automaticZoomSpeed": 10,
 "id": "camera_32B564DD_24CF_CAB1_41BC_C53D241A4544",
 "class": "PanoramaCamera"
},
{
 "autoplay": true,
 "class": "MediaAudio",
 "audio": {
  "oggUrl": "media/audio_01590D1A_155B_A128_41B1_485364B4AF1A.ogg",
  "mp3Url": "media/audio_01590D1A_155B_A128_41B1_485364B4AF1A.mp3",
  "class": "AudioResource"
 },
 "id": "audio_01590D1A_155B_A128_41B1_485364B4AF1A",
 "data": {
  "label": "company profile"
 }
},
{
 "initialPosition": {
  "yaw": -30.72,
  "hfov": 125,
  "class": "PanoramaCameraPosition",
  "pitch": -2.87
 },
 "initialSequence": {
  "movements": [
   {
    "targetYaw": 28.05,
    "path": "shortest",
    "targetPitch": -0.51,
    "pitchSpeed": 6.35,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 11.75
   }
  ],
  "class": "PanoramaCameraSequence",
  "restartMovementOnUserInteraction": false
 },
 "automaticZoomSpeed": 10,
 "id": "panorama_304525F7_24B5_4A71_41AB_91025F21903C_camera",
 "class": "PanoramaCamera"
},
{
 "initialPosition": {
  "yaw": 172.46,
  "hfov": 125,
  "class": "PanoramaCameraPosition",
  "pitch": 0
 },
 "initialSequence": {
  "movements": [
   {
    "targetYaw": -30.72,
    "path": "shortest",
    "targetPitch": -2.87,
    "pitchSpeed": 19.48,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 38.14
   },
   {
    "targetYaw": 28.05,
    "path": "shortest",
    "targetPitch": -0.51,
    "pitchSpeed": 6.35,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 11.75
   }
  ],
  "class": "PanoramaCameraSequence",
  "restartMovementOnUserInteraction": false
 },
 "automaticZoomSpeed": 10,
 "id": "camera_32E9F474_24CF_CA77_41A0_BF85B9245E4F",
 "class": "PanoramaCamera"
},
{
 "initialPosition": {
  "yaw": 135.23,
  "hfov": 125,
  "class": "PanoramaCameraPosition",
  "pitch": 0
 },
 "initialSequence": {
  "movements": [
   {
    "targetYaw": -33.17,
    "path": "shortest",
    "targetPitch": -1.23,
    "pitchSpeed": 15.73,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 30.6
   },
   {
    "targetYaw": -69.83,
    "path": "shortest",
    "targetPitch": -2.97,
    "pitchSpeed": 4.21,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 7.45
   }
  ],
  "class": "PanoramaCameraSequence",
  "restartMovementOnUserInteraction": false
 },
 "automaticZoomSpeed": 10,
 "id": "camera_33063405_24CF_C991_41BE_0DDC5D40D9B6",
 "class": "PanoramaCamera"
},
{
 "frames": [
  {
   "front": {
    "levels": [
     {
      "url": "media/panorama_304525F7_24B5_4A71_41AB_91025F21903C_0/f/0/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_304525F7_24B5_4A71_41AB_91025F21903C_0/f/1/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_304525F7_24B5_4A71_41AB_91025F21903C_0/f/2/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "left": {
    "levels": [
     {
      "url": "media/panorama_304525F7_24B5_4A71_41AB_91025F21903C_0/l/0/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_304525F7_24B5_4A71_41AB_91025F21903C_0/l/1/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_304525F7_24B5_4A71_41AB_91025F21903C_0/l/2/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "top": {
    "levels": [
     {
      "url": "media/panorama_304525F7_24B5_4A71_41AB_91025F21903C_0/u/0/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_304525F7_24B5_4A71_41AB_91025F21903C_0/u/1/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_304525F7_24B5_4A71_41AB_91025F21903C_0/u/2/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "right": {
    "levels": [
     {
      "url": "media/panorama_304525F7_24B5_4A71_41AB_91025F21903C_0/r/0/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_304525F7_24B5_4A71_41AB_91025F21903C_0/r/1/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_304525F7_24B5_4A71_41AB_91025F21903C_0/r/2/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "back": {
    "levels": [
     {
      "url": "media/panorama_304525F7_24B5_4A71_41AB_91025F21903C_0/b/0/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_304525F7_24B5_4A71_41AB_91025F21903C_0/b/1/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_304525F7_24B5_4A71_41AB_91025F21903C_0/b/2/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "bottom": {
    "levels": [
     {
      "url": "media/panorama_304525F7_24B5_4A71_41AB_91025F21903C_0/d/0/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_304525F7_24B5_4A71_41AB_91025F21903C_0/d/1/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_304525F7_24B5_4A71_41AB_91025F21903C_0/d/2/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "class": "CubicPanoramaFrame",
   "thumbnailUrl": "media/panorama_304525F7_24B5_4A71_41AB_91025F21903C_t.jpg"
  }
 ],
 "label": "HALAMAN",
 "id": "panorama_304525F7_24B5_4A71_41AB_91025F21903C",
 "thumbnailUrl": "media/panorama_304525F7_24B5_4A71_41AB_91025F21903C_t.jpg",
 "hfovMin": "150%",
 "overlays": [
  "this.overlay_36269588_24BF_CA9F_419E_59448E5BAE26",
  "this.overlay_300D05CC_2554_CA96_419E_C17ACAAD1959",
  "this.overlay_30617742_2554_D793_41A8_2D48FE74C9D5"
 ],
 "partial": false,
 "adjacentPanoramas": [
  {
   "yaw": -175.01,
   "class": "AdjacentPanorama",
   "backwardYaw": -44.77,
   "panorama": "this.panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2",
   "distance": 1
  },
  {
   "yaw": -7.54,
   "class": "AdjacentPanorama",
   "backwardYaw": 140.75,
   "panorama": "this.panorama_3591A138_24CC_CBFF_4199_26989DD179CA",
   "distance": 1
  }
 ],
 "hfov": 360,
 "pitch": 0,
 "class": "Panorama",
 "vfov": 180,
 "hfovMax": 130
},
{
 "items": [
  {
   "media": "this.panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.mainPlayList, 0, 1)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_camera"
  },
  {
   "media": "this.panorama_304525F7_24B5_4A71_41AB_91025F21903C",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.mainPlayList, 1, 2)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_304525F7_24B5_4A71_41AB_91025F21903C_camera"
  },
  {
   "media": "this.panorama_3591A138_24CC_CBFF_4199_26989DD179CA",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.mainPlayList, 2, 3)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_3591A138_24CC_CBFF_4199_26989DD179CA_camera"
  },
  {
   "media": "this.panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.mainPlayList, 3, 4)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_camera"
  },
  {
   "media": "this.panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.mainPlayList, 4, 5)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_camera"
  },
  {
   "media": "this.panorama_3104768E_24FD_D693_41C0_83B9D3815E1E",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.mainPlayList, 5, 6)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_camera"
  },
  {
   "media": "this.panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6",
   "end": "this.trigger('tourEnded')",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.mainPlayList, 6, 0)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_camera"
  }
 ],
 "id": "mainPlayList",
 "class": "PlayList"
},
{
 "buttonToggleHotspots": "this.IconButton_1A30244D_1556_E728_41B1_B234C52BF0B8",
 "class": "PanoramaPlayer",
 "buttonToggleGyroscope": "this.IconButton_1A31C44D_1556_E728_41A4_7406C2F29419",
 "displayPlaybackBar": true,
 "touchControlMode": "drag_rotation",
 "viewerArea": "this.MainViewer",
 "gyroscopeVerticalDraggingEnabled": true,
 "id": "MainViewerPanoramaPlayer",
 "buttonCardboardView": "this.IconButton_1A31F44D_1556_E728_41B3_9F64A53A3D7E",
 "mouseControlMode": "drag_acceleration"
},
{
 "initialPosition": {
  "yaw": 93.68,
  "hfov": 125,
  "class": "PanoramaCameraPosition",
  "pitch": -20.46
 },
 "initialSequence": {
  "movements": [
   {
    "targetYaw": 30.27,
    "path": "shortest",
    "targetPitch": -27.01,
    "pitchSpeed": 10.63,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 20.35
   },
   {
    "targetYaw": -87.55,
    "path": "shortest",
    "targetPitch": -25.78,
    "pitchSpeed": 10.63,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 20.35
   },
   {
    "targetYaw": 154.64,
    "path": "shortest",
    "targetPitch": -15.94,
    "pitchSpeed": 17.05,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 33.25
   }
  ],
  "class": "PanoramaCameraSequence",
  "restartMovementOnUserInteraction": false
 },
 "automaticZoomSpeed": 10,
 "id": "panorama_3591A138_24CC_CBFF_4199_26989DD179CA_camera",
 "class": "PanoramaCamera"
},
{
 "initialPosition": {
  "yaw": 80.59,
  "hfov": 125,
  "class": "PanoramaCameraPosition",
  "pitch": 12.27
 },
 "initialSequence": {
  "movements": [
   {
    "targetYaw": 74.05,
    "path": "shortest",
    "targetPitch": -14.73,
    "pitchSpeed": 8.49,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 16.05
   },
   {
    "targetYaw": -136.64,
    "path": "shortest",
    "targetPitch": -16.36,
    "pitchSpeed": 8.49,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 16.05
   }
  ],
  "class": "PanoramaCameraSequence",
  "restartMovementOnUserInteraction": false
 },
 "automaticZoomSpeed": 10,
 "id": "panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_camera",
 "class": "PanoramaCamera"
},
{
 "initialPosition": {
  "yaw": 120.27,
  "hfov": 125,
  "class": "PanoramaCameraPosition",
  "pitch": -18.82
 },
 "initialSequence": {
  "movements": [
   {
    "targetYaw": 51.95,
    "path": "shortest",
    "targetPitch": -22.5,
    "pitchSpeed": 6.35,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 11.75
   },
   {
    "targetYaw": -16.77,
    "path": "shortest",
    "targetPitch": -23.32,
    "pitchSpeed": 6.35,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 11.75
   }
  ],
  "class": "PanoramaCameraSequence",
  "restartMovementOnUserInteraction": false
 },
 "automaticZoomSpeed": 10,
 "id": "panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_camera",
 "class": "PanoramaCamera"
},
{
 "initialPosition": {
  "yaw": -39.25,
  "hfov": 125,
  "class": "PanoramaCameraPosition",
  "pitch": 0
 },
 "initialSequence": {
  "movements": [
   {
    "targetYaw": 93.68,
    "path": "shortest",
    "targetPitch": -20.46,
    "pitchSpeed": 21.32,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 41.83
   },
   {
    "targetYaw": 30.27,
    "path": "shortest",
    "targetPitch": -27.01,
    "pitchSpeed": 10.63,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 20.35
   },
   {
    "targetYaw": -87.55,
    "path": "shortest",
    "targetPitch": -25.78,
    "pitchSpeed": 10.63,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 20.35
   },
   {
    "targetYaw": 154.64,
    "path": "shortest",
    "targetPitch": -15.94,
    "pitchSpeed": 17.05,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 33.25
   }
  ],
  "class": "PanoramaCameraSequence",
  "restartMovementOnUserInteraction": false
 },
 "automaticZoomSpeed": 10,
 "id": "camera_32F71442_24CF_C993_419C_A1BF9343991C",
 "class": "PanoramaCamera"
},
{
 "items": [
  {
   "media": "this.panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.playList_015ECD63_0C4C_28E9_41A1_B73E17CADFA6, 0, 1)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_camera"
  },
  {
   "media": "this.panorama_304525F7_24B5_4A71_41AB_91025F21903C",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.playList_015ECD63_0C4C_28E9_41A1_B73E17CADFA6, 1, 2)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_304525F7_24B5_4A71_41AB_91025F21903C_camera"
  },
  {
   "media": "this.panorama_3591A138_24CC_CBFF_4199_26989DD179CA",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.playList_015ECD63_0C4C_28E9_41A1_B73E17CADFA6, 2, 3)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_3591A138_24CC_CBFF_4199_26989DD179CA_camera"
  },
  {
   "media": "this.panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.playList_015ECD63_0C4C_28E9_41A1_B73E17CADFA6, 3, 4)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_camera"
  },
  {
   "media": "this.panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.playList_015ECD63_0C4C_28E9_41A1_B73E17CADFA6, 4, 5)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_camera"
  },
  {
   "media": "this.panorama_3104768E_24FD_D693_41C0_83B9D3815E1E",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.playList_015ECD63_0C4C_28E9_41A1_B73E17CADFA6, 5, 6)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_camera"
  },
  {
   "media": "this.panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6",
   "class": "PanoramaPlayListItem",
   "begin": "this.setEndToItemIndex(this.playList_015ECD63_0C4C_28E9_41A1_B73E17CADFA6, 6, 0)",
   "player": "this.MainViewerPanoramaPlayer",
   "camera": "this.panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_camera"
  }
 ],
 "id": "playList_015ECD63_0C4C_28E9_41A1_B73E17CADFA6",
 "class": "PlayList"
},
{
 "initialPosition": {
  "yaw": -109.21,
  "hfov": 125,
  "class": "PanoramaCameraPosition",
  "pitch": 0
 },
 "initialSequence": {
  "movements": [
   {
    "targetYaw": 80.59,
    "hfovSpeed": 104.04,
    "targetHfov": 126,
    "easing": "cubic_in_out",
    "pitchSpeed": 52.28,
    "targetPitch": 12.27,
    "class": "TargetPanoramaCameraMovement",
    "path": "shortest",
    "yawSpeed": 104.04
   },
   {
    "targetYaw": 74.05,
    "path": "shortest",
    "targetPitch": -14.73,
    "pitchSpeed": 8.49,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 16.05
   },
   {
    "targetYaw": -136.64,
    "path": "shortest",
    "targetPitch": -16.36,
    "pitchSpeed": 8.49,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 16.05
   }
  ],
  "class": "PanoramaCameraSequence",
  "restartMovementOnUserInteraction": false
 },
 "automaticZoomSpeed": 10,
 "id": "camera_32C2E4AD_24CF_CA90_41B2_CB6D3C6EEAEB",
 "class": "PanoramaCamera"
},
{
 "initialPosition": {
  "yaw": 60.47,
  "hfov": 125,
  "class": "PanoramaCameraPosition",
  "pitch": 0
 },
 "initialSequence": {
  "movements": [
   {
    "targetYaw": 23.32,
    "path": "shortest",
    "targetPitch": -20.05,
    "pitchSpeed": 3.25,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 5.53
   },
   {
    "targetYaw": 123.55,
    "path": "shortest",
    "targetPitch": -21.27,
    "pitchSpeed": 6.35,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 11.75
   },
   {
    "targetYaw": -87.55,
    "path": "shortest",
    "targetPitch": -9,
    "pitchSpeed": 17.05,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 33.25
   }
  ],
  "class": "PanoramaCameraSequence",
  "restartMovementOnUserInteraction": false
 },
 "automaticZoomSpeed": 10,
 "id": "camera_328C9533_24CF_CBF1_4176_614D59C13E0F",
 "class": "PanoramaCamera"
},
{
 "frames": [
  {
   "front": {
    "levels": [
     {
      "url": "media/panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_0/f/0/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_0/f/1/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_0/f/2/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "left": {
    "levels": [
     {
      "url": "media/panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_0/l/0/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_0/l/1/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_0/l/2/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "top": {
    "levels": [
     {
      "url": "media/panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_0/u/0/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_0/u/1/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_0/u/2/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "right": {
    "levels": [
     {
      "url": "media/panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_0/r/0/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_0/r/1/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_0/r/2/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "back": {
    "levels": [
     {
      "url": "media/panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_0/b/0/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_0/b/1/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_0/b/2/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "bottom": {
    "levels": [
     {
      "url": "media/panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_0/d/0/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_0/d/1/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_0/d/2/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "class": "CubicPanoramaFrame",
   "thumbnailUrl": "media/panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_t.jpg"
  }
 ],
 "label": "DEPAN",
 "id": "panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2",
 "thumbnailUrl": "media/panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_t.jpg",
 "hfovMin": "150%",
 "overlays": [
  "this.overlay_360DBAB9_24CB_5EF1_41A0_A2FFDC7DC1AF",
  "this.overlay_377CFBAE_24BD_FE93_4191_3323C866BEFC"
 ],
 "partial": false,
 "adjacentPanoramas": [
  {
   "yaw": -44.77,
   "class": "AdjacentPanorama",
   "backwardYaw": -175.01,
   "panorama": "this.panorama_304525F7_24B5_4A71_41AB_91025F21903C",
   "distance": 1
  }
 ],
 "hfov": 360,
 "pitch": 0,
 "class": "Panorama",
 "vfov": 180,
 "hfovMax": 130
},
{
 "frames": [
  {
   "front": {
    "levels": [
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0/f/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0/f/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0/f/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0/f/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "left": {
    "levels": [
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0/l/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0/l/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0/l/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0/l/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "top": {
    "levels": [
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0/u/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0/u/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0/u/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0/u/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "right": {
    "levels": [
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0/r/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0/r/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0/r/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0/r/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "back": {
    "levels": [
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0/b/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0/b/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0/b/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0/b/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "bottom": {
    "levels": [
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0/d/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0/d/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0/d/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0/d/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "class": "CubicPanoramaFrame",
   "thumbnailUrl": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_t.jpg"
  }
 ],
 "label": "ANTAR RUANG",
 "id": "panorama_3104768E_24FD_D693_41C0_83B9D3815E1E",
 "thumbnailUrl": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_t.jpg",
 "hfovMin": "120%",
 "overlays": [
  "this.overlay_339E71C3_24F5_4A91_41A8_ED4D37C53337",
  "this.overlay_302907BF_24CB_B6F1_41C0_3768DB5B7DB7",
  "this.overlay_33B2E7A3_24CC_B691_41B3_2C9665DDB50B",
  "this.overlay_3338503C_24CC_C9F7_419D_3066C5338024",
  "this.overlay_3378694B_24D4_DB91_41C2_E56DDE95C72E"
 ],
 "partial": false,
 "adjacentPanoramas": [
  {
   "yaw": 41.73,
   "class": "AdjacentPanorama",
   "backwardYaw": -67.23,
   "panorama": "this.panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC",
   "distance": 1
  },
  {
   "yaw": -15.12,
   "class": "AdjacentPanorama",
   "backwardYaw": -119.53,
   "panorama": "this.panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285",
   "distance": 1
  },
  {
   "yaw": 70.79,
   "class": "AdjacentPanorama",
   "backwardYaw": 38.47,
   "panorama": "this.panorama_3591A138_24CC_CBFF_4199_26989DD179CA",
   "distance": 1
  }
 ],
 "hfov": 360,
 "pitch": 0,
 "class": "Panorama",
 "vfov": 180,
 "hfovMax": 130
},
{
 "initialPosition": {
  "yaw": 23.32,
  "hfov": 125,
  "class": "PanoramaCameraPosition",
  "pitch": -20.05
 },
 "initialSequence": {
  "movements": [
   {
    "targetYaw": 123.55,
    "path": "shortest",
    "targetPitch": -21.27,
    "pitchSpeed": 6.35,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 11.75
   },
   {
    "targetYaw": -87.55,
    "path": "shortest",
    "targetPitch": -9,
    "pitchSpeed": 17.05,
    "easing": "cubic_in_out",
    "class": "TargetPanoramaCameraMovement",
    "yawSpeed": 33.25
   }
  ],
  "class": "PanoramaCameraSequence",
  "restartMovementOnUserInteraction": false
 },
 "automaticZoomSpeed": 10,
 "id": "panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_camera",
 "class": "PanoramaCamera"
},
{
 "frames": [
  {
   "front": {
    "levels": [
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0/f/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0/f/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0/f/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0/f/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "left": {
    "levels": [
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0/l/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0/l/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0/l/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0/l/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "top": {
    "levels": [
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0/u/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0/u/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0/u/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0/u/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "right": {
    "levels": [
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0/r/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0/r/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0/r/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0/r/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "back": {
    "levels": [
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0/b/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0/b/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0/b/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0/b/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "bottom": {
    "levels": [
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0/d/0/{row}_{column}.jpg",
      "colCount": 6,
      "width": 3072,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 6,
      "height": 3072
     },
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0/d/1/{row}_{column}.jpg",
      "colCount": 3,
      "width": 1536,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 3,
      "height": 1536
     },
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0/d/2/{row}_{column}.jpg",
      "colCount": 2,
      "width": 1024,
      "tags": "ondemand",
      "class": "TiledImageResourceLevel",
      "rowCount": 2,
      "height": 1024
     },
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0/d/3/{row}_{column}.jpg",
      "colCount": 1,
      "width": 512,
      "tags": [
       "ondemand",
       "preload"
      ],
      "class": "TiledImageResourceLevel",
      "rowCount": 1,
      "height": 512
     }
    ],
    "class": "ImageResource"
   },
   "class": "CubicPanoramaFrame",
   "thumbnailUrl": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_t.jpg"
  }
 ],
 "label": "DAPUR",
 "id": "panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6",
 "thumbnailUrl": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_t.jpg",
 "hfovMin": "120%",
 "overlays": [
  "this.overlay_2BD714E7_24BF_CA92_41C1_D309CC49237A"
 ],
 "partial": false,
 "adjacentPanoramas": [
  {
   "panorama": "this.panorama_3104768E_24FD_D693_41C0_83B9D3815E1E",
   "class": "AdjacentPanorama"
  }
 ],
 "hfov": 360,
 "pitch": 0,
 "class": "Panorama",
 "vfov": 180,
 "hfovMax": 130
},
{
 "progressBarBorderSize": 1,
 "id": "MainViewer",
 "width": "100%",
 "playbackBarProgressBorderRadius": 0,
 "progressBarBorderRadius": 1,
 "toolTipShadowOpacity": 1,
 "class": "ViewerArea",
 "toolTipFontStyle": "normal",
 "playbackBarBorderRadius": 0,
 "paddingLeft": 0,
 "playbackBarProgressBorderColor": "#000000",
 "toolTipShadowHorizontalLength": 0,
 "minHeight": 50,
 "toolTipFontFamily": "Arial",
 "propagateClick": false,
 "toolTipTextShadowOpacity": 0,
 "playbackBarHeadBorderRadius": 0,
 "progressLeft": 0,
 "playbackBarHeadBorderSize": 0,
 "playbackBarProgressOpacity": 1,
 "playbackBarBorderSize": 0,
 "transitionDuration": 500,
 "playbackBarHeadShadowVerticalLength": 0,
 "minWidth": 100,
 "playbackBarBackgroundOpacity": 1,
 "height": "100%",
 "toolTipFontColor": "#606060",
 "playbackBarHeadBorderColor": "#000000",
 "vrPointerSelectionColor": "#FF6600",
 "toolTipBackgroundColor": "#F6F6F6",
 "playbackBarHeadShadowColor": "#000000",
 "borderSize": 0,
 "progressRight": 0,
 "firstTransitionDuration": 0,
 "progressOpacity": 1,
 "playbackBarHeadBackgroundColor": [
  "#111111",
  "#666666"
 ],
 "vrPointerSelectionTime": 2000,
 "progressBarBackgroundColorDirection": "vertical",
 "progressBottom": 0,
 "progressHeight": 10,
 "playbackBarHeadShadow": true,
 "toolTipShadowVerticalLength": 0,
 "shadow": false,
 "playbackBarHeadBackgroundColorDirection": "vertical",
 "progressBackgroundOpacity": 1,
 "playbackBarProgressBackgroundColor": [
  "#3399FF"
 ],
 "playbackBarOpacity": 1,
 "toolTipPaddingRight": 6,
 "playbackBarHeadShadowOpacity": 0.7,
 "toolTipBorderSize": 1,
 "toolTipPaddingLeft": 6,
 "toolTipPaddingTop": 4,
 "vrPointerColor": "#FFFFFF",
 "toolTipDisplayTime": 600,
 "progressBarOpacity": 1,
 "playbackBarBorderColor": "#FFFFFF",
 "progressBorderSize": 0,
 "transitionMode": "blending",
 "displayTooltipInTouchScreens": true,
 "toolTipBorderRadius": 3,
 "borderRadius": 0,
 "progressBorderRadius": 0,
 "paddingRight": 0,
 "playbackBarProgressBackgroundColorRatios": [
  0
 ],
 "playbackBarLeft": 0,
 "progressBackgroundColorRatios": [
  0
 ],
 "playbackBarHeadHeight": 15,
 "playbackBarHeadShadowBlurRadius": 3,
 "playbackBarHeadBackgroundColorRatios": [
  0,
  1
 ],
 "progressBarBorderColor": "#000000",
 "toolTipBorderColor": "#767676",
 "progressBarBackgroundColorRatios": [
  0
 ],
 "progressBackgroundColorDirection": "vertical",
 "toolTipShadowSpread": 0,
 "toolTipShadowBlurRadius": 3,
 "playbackBarBottom": 5,
 "toolTipTextShadowColor": "#000000",
 "toolTipOpacity": 1,
 "playbackBarHeadOpacity": 1,
 "progressBarBackgroundColor": [
  "#3399FF"
 ],
 "paddingTop": 0,
 "progressBorderColor": "#000000",
 "toolTipPaddingBottom": 4,
 "paddingBottom": 0,
 "toolTipFontSize": "1.11vmin",
 "toolTipTextShadowBlurRadius": 3,
 "progressBackgroundColor": [
  "#FFFFFF"
 ],
 "playbackBarProgressBackgroundColorDirection": "vertical",
 "toolTipShadowColor": "#333333",
 "playbackBarBackgroundColor": [
  "#FFFFFF"
 ],
 "playbackBarHeadShadowHorizontalLength": 0,
 "data": {
  "name": "Main Viewer"
 },
 "playbackBarHeight": 10,
 "playbackBarHeadWidth": 6,
 "playbackBarBackgroundColorDirection": "vertical",
 "toolTipFontWeight": "normal",
 "playbackBarProgressBorderSize": 0,
 "playbackBarRight": 0
},
{
 "horizontalAlign": "left",
 "scrollBarOpacity": 0.5,
 "id": "Container_1A30744E_1556_E728_41AB_86285F533B01",
 "backgroundOpacity": 0,
 "width": 115.05,
 "scrollBarVisible": "rollOver",
 "right": "0%",
 "children": [
  "this.Container_1A31A44D_1556_E728_41A5_6790A155CD5E",
  "this.Container_1A31944D_1556_E728_415B_D960A5E6D37C"
 ],
 "scrollBarMargin": 2,
 "class": "Container",
 "borderRadius": 0,
 "paddingLeft": 0,
 "paddingRight": 0,
 "overflow": "scroll",
 "minHeight": 1,
 "propagateClick": true,
 "verticalAlign": "top",
 "bottom": "-6.3%",
 "scrollBarWidth": 10,
 "height": 641,
 "minWidth": 1,
 "layout": "absolute",
 "paddingTop": 0,
 "paddingBottom": 0,
 "gap": 10,
 "borderSize": 0,
 "contentOpaque": false,
 "scrollBarColor": "#000000",
 "data": {
  "name": "--SETTINGS"
 },
 "shadow": false
},
{
 "horizontalAlign": "center",
 "maxHeight": 58,
 "maxWidth": 58,
 "id": "IconButton_1A31D44D_1556_E728_41A0_2B066A934CE7",
 "backgroundOpacity": 0,
 "width": 58,
 "class": "IconButton",
 "borderRadius": 0,
 "paddingLeft": 0,
 "paddingRight": 0,
 "minHeight": 1,
 "propagateClick": true,
 "verticalAlign": "middle",
 "height": 58,
 "minWidth": 1,
 "mode": "toggle",
 "transparencyActive": true,
 "paddingTop": 0,
 "pressedIconURL": "skin/IconButton_1A31D44D_1556_E728_41A0_2B066A934CE7_pressed.png",
 "paddingBottom": 0,
 "borderSize": 0,
 "iconURL": "skin/IconButton_1A31D44D_1556_E728_41A0_2B066A934CE7.png",
 "data": {
  "name": "IconButton MUTE"
 },
 "shadow": false,
 "pressedRollOverIconURL": "skin/IconButton_1A31D44D_1556_E728_41A0_2B066A934CE7_pressed_rollover.png",
 "cursor": "hand"
},
{
 "horizontalAlign": "center",
 "maxHeight": 58,
 "maxWidth": 58,
 "id": "IconButton_1A30344D_1556_E728_4168_08B49CEA2A64",
 "backgroundOpacity": 0,
 "width": 58,
 "class": "IconButton",
 "borderRadius": 0,
 "paddingLeft": 0,
 "paddingRight": 0,
 "minHeight": 1,
 "propagateClick": true,
 "verticalAlign": "middle",
 "height": 58,
 "minWidth": 1,
 "mode": "toggle",
 "transparencyActive": true,
 "paddingTop": 0,
 "pressedIconURL": "skin/IconButton_1A30344D_1556_E728_4168_08B49CEA2A64_pressed.png",
 "paddingBottom": 0,
 "borderSize": 0,
 "iconURL": "skin/IconButton_1A30344D_1556_E728_4168_08B49CEA2A64.png",
 "data": {
  "name": "IconButton FULLSCREEN"
 },
 "shadow": false,
 "pressedRollOverIconURL": "skin/IconButton_1A30344D_1556_E728_4168_08B49CEA2A64_pressed_rollover.png",
 "cursor": "hand"
},
{
 "useHandCursor": true,
 "maps": [
  {
   "hfov": 9.46,
   "yaw": -119.53,
   "class": "HotspotPanoramaOverlayMap",
   "image": {
    "levels": [
     {
      "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0_HS_0_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ],
    "class": "ImageResource"
   },
   "pitch": -11.79
  }
 ],
 "class": "HotspotPanoramaOverlay",
 "areas": [
  {
   "click": "this.startPanoramaWithCamera(this.panorama_3104768E_24FD_D693_41C0_83B9D3815E1E, this.camera_331BA3CD_24CF_CE91_41AA_239DEF4A26D1); this.mainPlayList.set('selectedIndex', 5)",
   "class": "HotspotPanoramaOverlayArea",
   "mapColor": "#FF0000"
  }
 ],
 "rollOverDisplay": false,
 "enabledInCardboard": true,
 "items": [
  {
   "image": "this.AnimatedImageResource_362028D6_24B5_DAB3_41A4_C950EEA3CFA7",
   "pitch": -11.79,
   "hfov": 9.46,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100,
   "yaw": -119.53
  }
 ],
 "id": "overlay_2B0C2A58_24BF_59BE_41B5_445E1C49767A",
 "data": {
  "label": "Circle 360 2"
 }
},
{
 "useHandCursor": true,
 "maps": [
  {
   "hfov": 7.74,
   "yaw": -67.23,
   "class": "HotspotPanoramaOverlayMap",
   "image": {
    "levels": [
     {
      "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0_HS_0_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ],
    "class": "ImageResource"
   },
   "pitch": -11.85
  }
 ],
 "class": "HotspotPanoramaOverlay",
 "areas": [
  {
   "click": "this.startPanoramaWithCamera(this.panorama_3104768E_24FD_D693_41C0_83B9D3815E1E, this.camera_332CF38C_24CF_CE97_41C1_425E942CCA5F); this.mainPlayList.set('selectedIndex', 5)",
   "class": "HotspotPanoramaOverlayArea",
   "mapColor": "#FF0000"
  }
 ],
 "rollOverDisplay": false,
 "enabledInCardboard": true,
 "items": [
  {
   "image": "this.AnimatedImageResource_376AC0ED_24B4_CA91_41C1_0FA6FA0C5A40",
   "pitch": -11.85,
   "hfov": 7.74,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100,
   "yaw": -67.23
  }
 ],
 "id": "overlay_2BCE4CF7_24BC_BA71_41A5_0F9114AEFFB5",
 "data": {
  "label": "Circle 360 2"
 }
},
{
 "bleachingDistance": 0.4,
 "class": "LensFlarePanoramaOverlay",
 "pitch": -7.77,
 "bleaching": 0.7,
 "id": "overlay_34AC384E_24B4_F993_41BB_3588E32E76AD",
 "yaw": 156.27
},
{
 "useHandCursor": true,
 "maps": [
  {
   "hfov": 6.48,
   "yaw": 61.79,
   "class": "HotspotPanoramaOverlayMap",
   "image": {
    "levels": [
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_1_HS_0_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ],
    "class": "ImageResource"
   },
   "pitch": -10.4
  }
 ],
 "class": "HotspotPanoramaOverlay",
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 3)",
   "class": "HotspotPanoramaOverlayArea",
   "mapColor": "#FF0000"
  }
 ],
 "rollOverDisplay": false,
 "enabledInCardboard": true,
 "items": [
  {
   "image": "this.AnimatedImageResource_30F5CA8A_24D5_DE93_41C0_303BAF517577",
   "pitch": -10.4,
   "hfov": 6.48,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100,
   "yaw": 61.79
  }
 ],
 "id": "overlay_3591B138_24CC_CBFF_41A2_040B73BD775A",
 "data": {
  "label": "Circle Door 02"
 }
},
{
 "useHandCursor": true,
 "maps": [
  {
   "hfov": 6.52,
   "yaw": 40.81,
   "class": "HotspotPanoramaOverlayMap",
   "image": {
    "levels": [
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_1_HS_1_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ],
    "class": "ImageResource"
   },
   "pitch": -8.59
  }
 ],
 "class": "HotspotPanoramaOverlay",
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 4)",
   "class": "HotspotPanoramaOverlayArea",
   "mapColor": "#FF0000"
  }
 ],
 "rollOverDisplay": false,
 "enabledInCardboard": true,
 "items": [
  {
   "image": "this.AnimatedImageResource_30F45A8B_24D5_DE91_41B1_E57B7D2599B5",
   "pitch": -8.59,
   "hfov": 6.52,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100,
   "yaw": 40.81
  }
 ],
 "id": "overlay_35915138_24CC_CBFF_41A3_756360B26AEC",
 "data": {
  "label": "Circle Door 02"
 }
},
{
 "useHandCursor": true,
 "maps": [
  {
   "hfov": 6.52,
   "yaw": 28.59,
   "class": "HotspotPanoramaOverlayMap",
   "image": {
    "levels": [
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_1_HS_2_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ],
    "class": "ImageResource"
   },
   "pitch": -8.71
  }
 ],
 "class": "HotspotPanoramaOverlay",
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 6)",
   "class": "HotspotPanoramaOverlayArea",
   "mapColor": "#FF0000"
  }
 ],
 "rollOverDisplay": false,
 "enabledInCardboard": true,
 "items": [
  {
   "image": "this.AnimatedImageResource_30F4EA8B_24D5_DE91_41C1_1AFABACFD950",
   "pitch": -8.71,
   "hfov": 6.52,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100,
   "yaw": 28.59
  }
 ],
 "id": "overlay_35916138_24CC_CBFF_41B3_BA9A5800B6CB",
 "data": {
  "label": "Circle Door 02"
 }
},
{
 "bleachingDistance": 0.14,
 "class": "LensFlarePanoramaOverlay",
 "pitch": -5.73,
 "bleaching": 0.85,
 "id": "overlay_35910138_24CC_CBFF_419F_41A562AB6AD6",
 "yaw": -169.36
},
{
 "useHandCursor": true,
 "maps": [
  {
   "hfov": 18.92,
   "yaw": 38.47,
   "class": "HotspotPanoramaOverlayMap",
   "image": {
    "levels": [
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0_HS_4_0_0_map.gif",
      "width": 30,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ],
    "class": "ImageResource"
   },
   "pitch": -37.22
  }
 ],
 "class": "HotspotPanoramaOverlay",
 "areas": [
  {
   "click": "this.startPanoramaWithCamera(this.panorama_3104768E_24FD_D693_41C0_83B9D3815E1E, this.camera_32C2E4AD_24CF_CA90_41B2_CB6D3C6EEAEB); this.mainPlayList.set('selectedIndex', 5)",
   "class": "HotspotPanoramaOverlayArea",
   "mapColor": "#FF0000"
  }
 ],
 "rollOverDisplay": false,
 "enabledInCardboard": true,
 "items": [
  {
   "image": "this.AnimatedImageResource_3DB9CF60_24DD_778E_41C1_4C15959F065F",
   "pitch": -37.22,
   "hfov": 18.92,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100,
   "yaw": 38.47
  }
 ],
 "id": "overlay_33ABFD82_24DD_7A93_41B9_45FAD7A7AC86",
 "data": {
  "label": "Circle Point 02b"
 }
},
{
 "useHandCursor": true,
 "maps": [
  {
   "hfov": 6.31,
   "yaw": 140.75,
   "class": "HotspotPanoramaOverlayMap",
   "image": {
    "levels": [
     {
      "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0_HS_5_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ],
    "class": "ImageResource"
   },
   "pitch": -16.84
  }
 ],
 "class": "HotspotPanoramaOverlay",
 "areas": [
  {
   "click": "this.startPanoramaWithCamera(this.panorama_304525F7_24B5_4A71_41AB_91025F21903C, this.camera_32E9F474_24CF_CA77_41A0_BF85B9245E4F); this.mainPlayList.set('selectedIndex', 1)",
   "class": "HotspotPanoramaOverlayArea",
   "mapColor": "#FF0000"
  }
 ],
 "rollOverDisplay": false,
 "enabledInCardboard": true,
 "items": [
  {
   "image": "this.AnimatedImageResource_3322E359_24CF_CFBE_4144_CF4673A3B248",
   "pitch": -16.84,
   "hfov": 6.31,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100,
   "yaw": 140.75
  }
 ],
 "id": "overlay_3D1E9F18_24D4_D7BF_419F_F576E45600C6",
 "data": {
  "label": "Circle Door 01"
 }
},
{
 "useHandCursor": true,
 "maps": [
  {
   "hfov": 13.05,
   "yaw": -7.54,
   "class": "HotspotPanoramaOverlayMap",
   "image": {
    "levels": [
     {
      "url": "media/panorama_304525F7_24B5_4A71_41AB_91025F21903C_0_HS_0_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ],
    "class": "ImageResource"
   },
   "pitch": -8.07
  }
 ],
 "class": "HotspotPanoramaOverlay",
 "areas": [
  {
   "click": "this.startPanoramaWithCamera(this.panorama_3591A138_24CC_CBFF_4199_26989DD179CA, this.camera_32F71442_24CF_C993_419C_A1BF9343991C); this.mainPlayList.set('selectedIndex', 2)",
   "class": "HotspotPanoramaOverlayArea",
   "mapColor": "#FF0000"
  }
 ],
 "rollOverDisplay": false,
 "enabledInCardboard": true,
 "items": [
  {
   "image": "this.AnimatedImageResource_3641D502_24BD_CB93_41B0_076FAB1C8EED",
   "pitch": -8.07,
   "hfov": 13.05,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100,
   "yaw": -7.54
  }
 ],
 "id": "overlay_36269588_24BF_CA9F_419E_59448E5BAE26",
 "data": {
  "label": "Circle Door 01"
 }
},
{
 "useHandCursor": true,
 "maps": [
  {
   "hfov": 24.51,
   "yaw": -175.01,
   "class": "HotspotPanoramaOverlayMap",
   "image": {
    "levels": [
     {
      "url": "media/panorama_304525F7_24B5_4A71_41AB_91025F21903C_0_HS_1_0_0_map.gif",
      "width": 30,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ],
    "class": "ImageResource"
   },
   "pitch": -21.66
  }
 ],
 "class": "HotspotPanoramaOverlay",
 "areas": [
  {
   "click": "this.startPanoramaWithCamera(this.panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2, this.camera_33063405_24CF_C991_41BE_0DDC5D40D9B6); this.mainPlayList.set('selectedIndex', 0)",
   "class": "HotspotPanoramaOverlayArea",
   "mapColor": "#FF0000"
  }
 ],
 "rollOverDisplay": false,
 "enabledInCardboard": true,
 "items": [
  {
   "image": "this.AnimatedImageResource_307EFDB3_2554_BAF1_41AB_FD661888E784",
   "pitch": -21.66,
   "hfov": 24.51,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100,
   "yaw": -175.01
  }
 ],
 "id": "overlay_300D05CC_2554_CA96_419E_C17ACAAD1959",
 "data": {
  "label": "Circle Point 02b"
 }
},
{
 "bleachingDistance": 0.4,
 "class": "LensFlarePanoramaOverlay",
 "pitch": 15.87,
 "bleaching": 0.7,
 "id": "overlay_30617742_2554_D793_41A8_2D48FE74C9D5",
 "yaw": -125.12
},
{
 "horizontalAlign": "center",
 "maxHeight": 58,
 "maxWidth": 58,
 "id": "IconButton_1A30244D_1556_E728_41B1_B234C52BF0B8",
 "backgroundOpacity": 0,
 "width": 58,
 "class": "IconButton",
 "borderRadius": 0,
 "paddingLeft": 0,
 "paddingRight": 0,
 "minHeight": 1,
 "propagateClick": true,
 "verticalAlign": "middle",
 "height": 58,
 "minWidth": 1,
 "mode": "toggle",
 "transparencyActive": true,
 "paddingTop": 0,
 "pressedIconURL": "skin/IconButton_1A30244D_1556_E728_41B1_B234C52BF0B8_pressed.png",
 "paddingBottom": 0,
 "borderSize": 0,
 "iconURL": "skin/IconButton_1A30244D_1556_E728_41B1_B234C52BF0B8.png",
 "data": {
  "name": "IconButton HS "
 },
 "shadow": false,
 "pressedRollOverIconURL": "skin/IconButton_1A30244D_1556_E728_41B1_B234C52BF0B8_pressed_rollover.png",
 "cursor": "hand"
},
{
 "horizontalAlign": "center",
 "maxHeight": 58,
 "maxWidth": 58,
 "id": "IconButton_1A31C44D_1556_E728_41A4_7406C2F29419",
 "backgroundOpacity": 0,
 "width": 58,
 "class": "IconButton",
 "borderRadius": 0,
 "paddingLeft": 0,
 "paddingRight": 0,
 "minHeight": 1,
 "propagateClick": true,
 "verticalAlign": "middle",
 "height": 58,
 "minWidth": 1,
 "mode": "toggle",
 "transparencyActive": true,
 "paddingTop": 0,
 "pressedIconURL": "skin/IconButton_1A31C44D_1556_E728_41A4_7406C2F29419_pressed.png",
 "paddingBottom": 0,
 "borderSize": 0,
 "iconURL": "skin/IconButton_1A31C44D_1556_E728_41A4_7406C2F29419.png",
 "data": {
  "name": "IconButton GYRO"
 },
 "shadow": false,
 "pressedRollOverIconURL": "skin/IconButton_1A31C44D_1556_E728_41A4_7406C2F29419_pressed_rollover.png",
 "cursor": "hand"
},
{
 "horizontalAlign": "center",
 "maxHeight": 58,
 "maxWidth": 58,
 "id": "IconButton_1A31F44D_1556_E728_41B3_9F64A53A3D7E",
 "backgroundOpacity": 0,
 "width": 58,
 "class": "IconButton",
 "borderRadius": 0,
 "paddingLeft": 0,
 "paddingRight": 0,
 "minHeight": 1,
 "rollOverIconURL": "skin/IconButton_1A31F44D_1556_E728_41B3_9F64A53A3D7E_rollover.png",
 "propagateClick": true,
 "verticalAlign": "middle",
 "height": 58,
 "minWidth": 1,
 "mode": "push",
 "transparencyActive": true,
 "paddingTop": 0,
 "paddingBottom": 0,
 "borderSize": 0,
 "iconURL": "skin/IconButton_1A31F44D_1556_E728_41B3_9F64A53A3D7E.png",
 "data": {
  "name": "IconButton VR"
 },
 "shadow": false,
 "visible": false,
 "cursor": "hand"
},
{
 "bleachingDistance": 0.4,
 "class": "LensFlarePanoramaOverlay",
 "pitch": 27.75,
 "bleaching": 0.7,
 "id": "overlay_360DBAB9_24CB_5EF1_41A0_A2FFDC7DC1AF",
 "yaw": -173.86
},
{
 "useHandCursor": true,
 "maps": [
  {
   "hfov": 25.41,
   "yaw": -44.77,
   "class": "HotspotPanoramaOverlayMap",
   "image": {
    "levels": [
     {
      "url": "media/panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_0_HS_2_0_0_map.gif",
      "width": 30,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ],
    "class": "ImageResource"
   },
   "pitch": -15.51
  }
 ],
 "class": "HotspotPanoramaOverlay",
 "areas": [
  {
   "click": "this.startPanoramaWithCamera(this.panorama_304525F7_24B5_4A71_41AB_91025F21903C, this.camera_32B564DD_24CF_CAB1_41BC_C53D241A4544); this.mainPlayList.set('selectedIndex', 1)",
   "class": "HotspotPanoramaOverlayArea",
   "mapColor": "#FF0000"
  }
 ],
 "rollOverDisplay": false,
 "enabledInCardboard": true,
 "items": [
  {
   "image": "this.AnimatedImageResource_36412501_24BD_CB91_41C0_EB3599C93865",
   "pitch": -15.51,
   "hfov": 25.41,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100,
   "yaw": -44.77
  }
 ],
 "id": "overlay_377CFBAE_24BD_FE93_4191_3323C866BEFC",
 "data": {
  "label": "Circle Point 02b"
 }
},
{
 "bleachingDistance": 0.2,
 "class": "LensFlarePanoramaOverlay",
 "pitch": 9,
 "bleaching": 0.49,
 "id": "overlay_339E71C3_24F5_4A91_41A8_ED4D37C53337",
 "yaw": 87.14
},
{
 "useHandCursor": true,
 "maps": [
  {
   "hfov": 6.35,
   "yaw": 41.73,
   "class": "HotspotPanoramaOverlayMap",
   "image": {
    "levels": [
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0_HS_0_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ],
    "class": "ImageResource"
   },
   "pitch": -15.71
  }
 ],
 "class": "HotspotPanoramaOverlay",
 "areas": [
  {
   "click": "this.startPanoramaWithCamera(this.panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC, this.camera_3293E50A_24CF_CB93_41BF_D06A403AB9B9); this.mainPlayList.set('selectedIndex', 3)",
   "class": "HotspotPanoramaOverlayArea",
   "mapColor": "#FF0000"
  }
 ],
 "rollOverDisplay": false,
 "enabledInCardboard": true,
 "items": [
  {
   "image": "this.AnimatedImageResource_3DC2B3FB_24CD_4E71_41B1_23DC95E97B85",
   "pitch": -15.71,
   "hfov": 6.35,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100,
   "yaw": 41.73
  }
 ],
 "id": "overlay_302907BF_24CB_B6F1_41C0_3768DB5B7DB7",
 "data": {
  "label": "Circle Door 02"
 }
},
{
 "useHandCursor": true,
 "maps": [
  {
   "hfov": 16.31,
   "yaw": -127.62,
   "class": "HotspotPanoramaOverlayMap",
   "image": {
    "levels": [
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0_HS_1_0_0_map.gif",
      "width": 30,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ],
    "class": "ImageResource"
   },
   "pitch": -46.64
  }
 ],
 "class": "HotspotPanoramaOverlay",
 "areas": [
  {
   "mapColor": "#FF0000",
   "class": "HotspotPanoramaOverlayArea"
  }
 ],
 "rollOverDisplay": false,
 "enabledInCardboard": true,
 "items": [
  {
   "image": "this.AnimatedImageResource_3DC2C3FC_24CD_4E77_41BC_7A252B89A686",
   "pitch": -46.64,
   "hfov": 16.31,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100,
   "yaw": -127.62
  }
 ],
 "id": "overlay_33B2E7A3_24CC_B691_41B3_2C9665DDB50B",
 "data": {
  "label": "Circle Point 02b"
 }
},
{
 "useHandCursor": true,
 "maps": [
  {
   "hfov": 18.71,
   "yaw": -15.12,
   "class": "HotspotPanoramaOverlayMap",
   "image": {
    "levels": [
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0_HS_2_0_0_map.gif",
      "width": 30,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ],
    "class": "ImageResource"
   },
   "pitch": -38.05
  }
 ],
 "class": "HotspotPanoramaOverlay",
 "areas": [
  {
   "click": "this.startPanoramaWithCamera(this.panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285, this.camera_328C9533_24CF_CBF1_4176_614D59C13E0F); this.mainPlayList.set('selectedIndex', 4)",
   "class": "HotspotPanoramaOverlayArea",
   "mapColor": "#FF0000"
  }
 ],
 "rollOverDisplay": false,
 "enabledInCardboard": true,
 "items": [
  {
   "image": "this.AnimatedImageResource_3DC233FC_24CD_4E77_41B0_13C13B9039F0",
   "pitch": -38.05,
   "hfov": 18.71,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100,
   "yaw": -15.12
  }
 ],
 "id": "overlay_3338503C_24CC_C9F7_419D_3066C5338024",
 "data": {
  "label": "Circle Point 02b"
 }
},
{
 "useHandCursor": true,
 "maps": [
  {
   "hfov": 20.07,
   "yaw": 70.79,
   "class": "HotspotPanoramaOverlayMap",
   "image": {
    "levels": [
     {
      "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0_HS_3_0_0_map.gif",
      "width": 30,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ],
    "class": "ImageResource"
   },
   "pitch": -32.32
  }
 ],
 "class": "HotspotPanoramaOverlay",
 "areas": [
  {
   "click": "this.startPanoramaWithCamera(this.panorama_3591A138_24CC_CBFF_4199_26989DD179CA, this.camera_3269E554_24CF_CBB7_4194_3E3BC7931154); this.mainPlayList.set('selectedIndex', 2)",
   "class": "HotspotPanoramaOverlayArea",
   "mapColor": "#FF0000"
  }
 ],
 "rollOverDisplay": false,
 "enabledInCardboard": true,
 "items": [
  {
   "image": "this.AnimatedImageResource_328A3210_24DB_C98F_4191_60B4832070D2",
   "pitch": -32.32,
   "hfov": 20.07,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100,
   "yaw": 70.79
  }
 ],
 "id": "overlay_3378694B_24D4_DB91_41C2_E56DDE95C72E",
 "data": {
  "label": "Circle Point 02b"
 }
},
{
 "useHandCursor": true,
 "maps": [
  {
   "hfov": 9.34,
   "yaw": -19.71,
   "class": "HotspotPanoramaOverlayMap",
   "image": {
    "levels": [
     {
      "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0_HS_0_0_0_map.gif",
      "width": 16,
      "class": "ImageResourceLevel",
      "height": 16
     }
    ],
    "class": "ImageResource"
   },
   "pitch": -15.06
  }
 ],
 "class": "HotspotPanoramaOverlay",
 "areas": [
  {
   "click": "this.mainPlayList.set('selectedIndex', 5)",
   "class": "HotspotPanoramaOverlayArea",
   "mapColor": "#FF0000"
  }
 ],
 "rollOverDisplay": false,
 "enabledInCardboard": true,
 "items": [
  {
   "image": "this.AnimatedImageResource_3C44301D_24D7_C9B1_41A1_DC0AF29F3481",
   "pitch": -15.06,
   "hfov": 9.34,
   "class": "HotspotPanoramaOverlayImage",
   "distance": 100,
   "yaw": -19.71
  }
 ],
 "id": "overlay_2BD714E7_24BF_CA92_41C1_D309CC49237A",
 "data": {
  "label": "Circle 360 2"
 }
},
{
 "horizontalAlign": "center",
 "scrollBarOpacity": 0.5,
 "id": "Container_1A31A44D_1556_E728_41A5_6790A155CD5E",
 "backgroundOpacity": 0,
 "width": 110,
 "scrollBarVisible": "rollOver",
 "right": "0%",
 "children": [
  "this.IconButton_1A31B44D_1556_E728_41B4_6EDD310CD801"
 ],
 "scrollBarMargin": 2,
 "class": "Container",
 "borderRadius": 0,
 "paddingLeft": 0,
 "paddingRight": 0,
 "overflow": "visible",
 "minHeight": 1,
 "propagateClick": true,
 "top": "0%",
 "verticalAlign": "middle",
 "scrollBarWidth": 10,
 "height": 84,
 "minWidth": 1,
 "layout": "horizontal",
 "paddingTop": 0,
 "paddingBottom": 0,
 "gap": 10,
 "borderSize": 0,
 "contentOpaque": false,
 "scrollBarColor": "#000000",
 "data": {
  "name": "button menu sup"
 },
 "shadow": false
},
{
 "horizontalAlign": "center",
 "scrollBarOpacity": 0.5,
 "id": "Container_1A31944D_1556_E728_415B_D960A5E6D37C",
 "backgroundOpacity": 0,
 "children": [
  "this.IconButton_1A31F44D_1556_E728_41B3_9F64A53A3D7E",
  "this.IconButton_1A31C44D_1556_E728_41A4_7406C2F29419",
  "this.IconButton_1A31D44D_1556_E728_41A0_2B066A934CE7",
  "this.IconButton_1A30244D_1556_E728_41B1_B234C52BF0B8",
  "this.IconButton_1A30344D_1556_E728_4168_08B49CEA2A64"
 ],
 "scrollBarVisible": "rollOver",
 "right": "0%",
 "width": "91.304%",
 "scrollBarMargin": 2,
 "class": "Container",
 "borderRadius": 0,
 "paddingLeft": 0,
 "paddingRight": 0,
 "overflow": "scroll",
 "minHeight": 1,
 "propagateClick": true,
 "bottom": "0%",
 "height": "85.959%",
 "verticalAlign": "top",
 "minWidth": 1,
 "layout": "vertical",
 "scrollBarWidth": 10,
 "paddingTop": 0,
 "paddingBottom": 0,
 "gap": 3,
 "borderSize": 0,
 "contentOpaque": false,
 "scrollBarColor": "#000000",
 "data": {
  "name": "-button set"
 },
 "shadow": false,
 "visible": false
},
{
 "class": "AnimatedImageResource",
 "frameCount": 24,
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_2B0FCA58_24BF_59BE_41B4_9D97E5697285_0_HS_0_0.png",
   "width": 800,
   "class": "ImageResourceLevel",
   "height": 1200
  }
 ],
 "id": "AnimatedImageResource_362028D6_24B5_DAB3_41A4_C950EEA3CFA7",
 "rowCount": 6,
 "colCount": 4
},
{
 "class": "AnimatedImageResource",
 "frameCount": 24,
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_2BCE5CF7_24BC_BA71_41BA_B970DB48C2BC_0_HS_0_0.png",
   "width": 800,
   "class": "ImageResourceLevel",
   "height": 1200
  }
 ],
 "id": "AnimatedImageResource_376AC0ED_24B4_CA91_41C1_0FA6FA0C5A40",
 "rowCount": 6,
 "colCount": 4
},
{
 "class": "AnimatedImageResource",
 "frameCount": 24,
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_1_HS_0_0.png",
   "width": 800,
   "class": "ImageResourceLevel",
   "height": 1200
  }
 ],
 "id": "AnimatedImageResource_30F5CA8A_24D5_DE93_41C0_303BAF517577",
 "rowCount": 6,
 "colCount": 4
},
{
 "class": "AnimatedImageResource",
 "frameCount": 24,
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_1_HS_1_0.png",
   "width": 800,
   "class": "ImageResourceLevel",
   "height": 1200
  }
 ],
 "id": "AnimatedImageResource_30F45A8B_24D5_DE91_41B1_E57B7D2599B5",
 "rowCount": 6,
 "colCount": 4
},
{
 "class": "AnimatedImageResource",
 "frameCount": 24,
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_1_HS_2_0.png",
   "width": 800,
   "class": "ImageResourceLevel",
   "height": 1200
  }
 ],
 "id": "AnimatedImageResource_30F4EA8B_24D5_DE91_41C1_1AFABACFD950",
 "rowCount": 6,
 "colCount": 4
},
{
 "class": "AnimatedImageResource",
 "frameCount": 24,
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0_HS_4_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 930
  }
 ],
 "id": "AnimatedImageResource_3DB9CF60_24DD_778E_41C1_4C15959F065F",
 "rowCount": 6,
 "colCount": 4
},
{
 "class": "AnimatedImageResource",
 "frameCount": 24,
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_3591A138_24CC_CBFF_4199_26989DD179CA_0_HS_5_0.png",
   "width": 800,
   "class": "ImageResourceLevel",
   "height": 1200
  }
 ],
 "id": "AnimatedImageResource_3322E359_24CF_CFBE_4144_CF4673A3B248",
 "rowCount": 6,
 "colCount": 4
},
{
 "class": "AnimatedImageResource",
 "frameCount": 24,
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_304525F7_24B5_4A71_41AB_91025F21903C_0_HS_0_0.png",
   "width": 800,
   "class": "ImageResourceLevel",
   "height": 1200
  }
 ],
 "id": "AnimatedImageResource_3641D502_24BD_CB93_41B0_076FAB1C8EED",
 "rowCount": 6,
 "colCount": 4
},
{
 "class": "AnimatedImageResource",
 "frameCount": 24,
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_304525F7_24B5_4A71_41AB_91025F21903C_0_HS_1_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 930
  }
 ],
 "id": "AnimatedImageResource_307EFDB3_2554_BAF1_41AB_FD661888E784",
 "rowCount": 6,
 "colCount": 4
},
{
 "class": "AnimatedImageResource",
 "frameCount": 24,
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_360D9AB9_24CB_5EF1_41AD_BC9CE4F5F5C2_0_HS_2_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 930
  }
 ],
 "id": "AnimatedImageResource_36412501_24BD_CB91_41C0_EB3599C93865",
 "rowCount": 6,
 "colCount": 4
},
{
 "class": "AnimatedImageResource",
 "frameCount": 24,
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0_HS_0_0.png",
   "width": 800,
   "class": "ImageResourceLevel",
   "height": 1200
  }
 ],
 "id": "AnimatedImageResource_3DC2B3FB_24CD_4E71_41B1_23DC95E97B85",
 "rowCount": 6,
 "colCount": 4
},
{
 "class": "AnimatedImageResource",
 "frameCount": 24,
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0_HS_1_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 930
  }
 ],
 "id": "AnimatedImageResource_3DC2C3FC_24CD_4E77_41BC_7A252B89A686",
 "rowCount": 6,
 "colCount": 4
},
{
 "class": "AnimatedImageResource",
 "frameCount": 24,
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0_HS_2_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 930
  }
 ],
 "id": "AnimatedImageResource_3DC233FC_24CD_4E77_41B0_13C13B9039F0",
 "rowCount": 6,
 "colCount": 4
},
{
 "class": "AnimatedImageResource",
 "frameCount": 24,
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_3104768E_24FD_D693_41C0_83B9D3815E1E_0_HS_3_0.png",
   "width": 1200,
   "class": "ImageResourceLevel",
   "height": 930
  }
 ],
 "id": "AnimatedImageResource_328A3210_24DB_C98F_4191_60B4832070D2",
 "rowCount": 6,
 "colCount": 4
},
{
 "class": "AnimatedImageResource",
 "frameCount": 24,
 "frameDuration": 41,
 "levels": [
  {
   "url": "media/panorama_2BD774E7_24BF_CA92_41BE_4F508340D0E6_0_HS_0_0.png",
   "width": 800,
   "class": "ImageResourceLevel",
   "height": 1200
  }
 ],
 "id": "AnimatedImageResource_3C44301D_24D7_C9B1_41A1_DC0AF29F3481",
 "rowCount": 6,
 "colCount": 4
},
{
 "horizontalAlign": "center",
 "maxHeight": 60,
 "maxWidth": 60,
 "id": "IconButton_1A31B44D_1556_E728_41B4_6EDD310CD801",
 "backgroundOpacity": 0,
 "width": 40,
 "class": "IconButton",
 "borderRadius": 0,
 "paddingLeft": 0,
 "paddingRight": 0,
 "minHeight": 1,
 "propagateClick": true,
 "verticalAlign": "middle",
 "height": 44,
 "minWidth": 1,
 "mode": "toggle",
 "transparencyActive": true,
 "paddingTop": 0,
 "pressedIconURL": "skin/IconButton_1A31B44D_1556_E728_41B4_6EDD310CD801_pressed.png",
 "paddingBottom": 0,
 "click": "if(!this.Container_1A31944D_1556_E728_415B_D960A5E6D37C.get('visible')){ this.setComponentVisibility(this.Container_1A31944D_1556_E728_415B_D960A5E6D37C, true, 0, null, null, false) } else { this.setComponentVisibility(this.Container_1A31944D_1556_E728_415B_D960A5E6D37C, false, 0, null, null, false) }",
 "borderSize": 0,
 "iconURL": "skin/IconButton_1A31B44D_1556_E728_41B4_6EDD310CD801.png",
 "data": {
  "name": "image button menu"
 },
 "shadow": false,
 "pressedRollOverIconURL": "skin/IconButton_1A31B44D_1556_E728_41B4_6EDD310CD801_pressed_rollover.png",
 "cursor": "hand"
}],
 "backgroundPreloadEnabled": true,
 "paddingTop": 0,
 "paddingBottom": 0,
 "gap": 10,
 "borderSize": 0,
 "height": "100%",
 "contentOpaque": false,
 "scripts": {
  "pauseGlobalAudiosWhilePlayItem": function(playList, index, exclude){  var self = this; var item = playList.get('items')[index]; var media = item.get('media'); var player = item.get('player'); var caller = media.get('id'); var endFunc = function(){ if(playList.get('selectedIndex') != index) { if(hasState){ player.unbind('stateChange', stateChangeFunc, self); } self.resumeGlobalAudios(caller); } }; var stateChangeFunc = function(event){ var state = event.data.state; if(state == 'stopped'){ this.resumeGlobalAudios(caller); } else if(state == 'playing'){ this.pauseGlobalAudios(caller, exclude); } }; var mediaClass = media.get('class'); var hasState = mediaClass == 'Video360' || mediaClass == 'Video'; if(hasState){ player.bind('stateChange', stateChangeFunc, this); } this.pauseGlobalAudios(caller, exclude); this.executeFunctionWhenChange(playList, index, endFunc, endFunc); },
  "getPlayListItems": function(media, player){  var itemClass = (function() { switch(media.get('class')) { case 'Panorama': case 'LivePanorama': case 'HDRPanorama': return 'PanoramaPlayListItem'; case 'Video360': return 'Video360PlayListItem'; case 'PhotoAlbum': return 'PhotoAlbumPlayListItem'; case 'Map': return 'MapPlayListItem'; case 'Video': return 'VideoPlayListItem'; } })(); if (itemClass != undefined) { var items = this.getByClassName(itemClass); for (var i = items.length-1; i>=0; --i) { var item = items[i]; if(item.get('media') != media || (player != undefined && item.get('player') != player)) { items.splice(i, 1); } } return items; } else { return []; } },
  "updateVideoCues": function(playList, index){  var playListItem = playList.get('items')[index]; var video = playListItem.get('media'); if(video.get('cues').length == 0) return; var player = playListItem.get('player'); var cues = []; var changeFunction = function(){ if(playList.get('selectedIndex') != index){ video.unbind('cueChange', cueChangeFunction, this); playList.unbind('change', changeFunction, this); } }; var cueChangeFunction = function(event){ var activeCues = event.data.activeCues; for(var i = 0, count = cues.length; i<count; ++i){ var cue = cues[i]; if(activeCues.indexOf(cue) == -1 && (cue.get('startTime') > player.get('currentTime') || cue.get('endTime') < player.get('currentTime')+0.5)){ cue.trigger('end'); } } cues = activeCues; }; video.bind('cueChange', cueChangeFunction, this); playList.bind('change', changeFunction, this); },
  "setMainMediaByIndex": function(index){  var item = undefined; if(index >= 0 && index < this.mainPlayList.get('items').length){ this.mainPlayList.set('selectedIndex', index); item = this.mainPlayList.get('items')[index]; } return item; },
  "setPanoramaCameraWithCurrentSpot": function(playListItem){  var currentPlayer = this.getActivePlayerWithViewer(this.MainViewer); if(currentPlayer == undefined){ return; } var playerClass = currentPlayer.get('class'); if(playerClass != 'PanoramaPlayer' && playerClass != 'Video360Player'){ return; } var fromMedia = currentPlayer.get('panorama'); if(fromMedia == undefined) { fromMedia = currentPlayer.get('video'); } var panorama = playListItem.get('media'); var newCamera = this.cloneCamera(playListItem.get('camera')); this.setCameraSameSpotAsMedia(newCamera, fromMedia); this.startPanoramaWithCamera(panorama, newCamera); },
  "playGlobalAudioWhilePlay": function(playList, index, audio, endCallback){  var changeFunction = function(event){ if(event.data.previousSelectedIndex == index){ this.stopGlobalAudio(audio); if(isPanorama) { var media = playListItem.get('media'); var audios = media.get('audios'); audios.splice(audios.indexOf(audio), 1); media.set('audios', audios); } playList.unbind('change', changeFunction, this); if(endCallback) endCallback(); } }; var audios = window.currentGlobalAudios; if(audios && audio.get('id') in audios){ audio = audios[audio.get('id')]; if(audio.get('state') != 'playing'){ audio.play(); } return audio; } playList.bind('change', changeFunction, this); var playListItem = playList.get('items')[index]; var isPanorama = playListItem.get('class') == 'PanoramaPlayListItem'; if(isPanorama) { var media = playListItem.get('media'); var audios = (media.get('audios') || []).slice(); if(audio.get('class') == 'MediaAudio') { var panoramaAudio = this.rootPlayer.createInstance('PanoramaAudio'); panoramaAudio.set('autoplay', false); panoramaAudio.set('audio', audio.get('audio')); panoramaAudio.set('loop', audio.get('loop')); panoramaAudio.set('id', audio.get('id')); var stateChangeFunctions = audio.getBindings('stateChange'); for(var i = 0; i<stateChangeFunctions.length; ++i){ var f = stateChangeFunctions[i]; if(typeof f == 'string') f = new Function('event', f); panoramaAudio.bind('stateChange', f, this); } audio = panoramaAudio; } audios.push(audio); media.set('audios', audios); } return this.playGlobalAudio(audio, endCallback); },
  "getActivePlayerWithViewer": function(viewerArea){  var players = this.getByClassName('PanoramaPlayer'); players = players.concat(this.getByClassName('VideoPlayer')); players = players.concat(this.getByClassName('Video360Player')); players = players.concat(this.getByClassName('PhotoAlbumPlayer')); players = players.concat(this.getByClassName('MapPlayer')); var i = players.length; while(i-- > 0){ var player = players[i]; if(player.get('viewerArea') == viewerArea) { var playerClass = player.get('class'); if(playerClass == 'PanoramaPlayer' && (player.get('panorama') != undefined || player.get('video') != undefined)) return player; else if((playerClass == 'VideoPlayer' || playerClass == 'Video360Player') && player.get('video') != undefined) return player; else if(playerClass == 'PhotoAlbumPlayer' && player.get('photoAlbum') != undefined) return player; else if(playerClass == 'MapPlayer' && player.get('map') != undefined) return player; } } return undefined; },
  "autotriggerAtStart": function(playList, callback, once){  var onChange = function(event){ callback(); if(once == true) playList.unbind('change', onChange, this); }; playList.bind('change', onChange, this); },
  "setMapLocation": function(panoramaPlayListItem, mapPlayer){  var resetFunction = function(){ panoramaPlayListItem.unbind('stop', resetFunction, this); player.set('mapPlayer', null); }; panoramaPlayListItem.bind('stop', resetFunction, this); var player = panoramaPlayListItem.get('player'); player.set('mapPlayer', mapPlayer); },
  "setCameraSameSpotAsMedia": function(camera, media){  var player = this.getCurrentPlayerWithMedia(media); if(player != undefined) { var position = camera.get('initialPosition'); position.set('yaw', player.get('yaw')); position.set('pitch', player.get('pitch')); position.set('hfov', player.get('hfov')); } },
  "updateMediaLabelFromPlayList": function(playList, htmlText, playListItemStopToDispose){  var changeFunction = function(){ var index = playList.get('selectedIndex'); if(index >= 0){ var beginFunction = function(){ playListItem.unbind('begin', beginFunction); setMediaLabel(index); }; var setMediaLabel = function(index){ var media = playListItem.get('media'); var text = media.get('data'); if(!text) text = media.get('label'); setHtml(text); }; var setHtml = function(text){ if(text !== undefined) { htmlText.set('html', '<div style=\"text-align:left\"><SPAN STYLE=\"color:#FFFFFF;font-size:12px;font-family:Verdana\"><span color=\"white\" font-family=\"Verdana\" font-size=\"12px\">' + text + '</SPAN></div>'); } else { htmlText.set('html', ''); } }; var playListItem = playList.get('items')[index]; if(htmlText.get('html')){ setHtml('Loading...'); playListItem.bind('begin', beginFunction); } else{ setMediaLabel(index); } } }; var disposeFunction = function(){ htmlText.set('html', undefined); playList.unbind('change', changeFunction, this); playListItemStopToDispose.unbind('stop', disposeFunction, this); }; if(playListItemStopToDispose){ playListItemStopToDispose.bind('stop', disposeFunction, this); } playList.bind('change', changeFunction, this); changeFunction(); },
  "setEndToItemIndex": function(playList, fromIndex, toIndex){  var endFunction = function(){ if(playList.get('selectedIndex') == fromIndex) playList.set('selectedIndex', toIndex); }; this.executeFunctionWhenChange(playList, fromIndex, endFunction); },
  "getCurrentPlayers": function(){  var players = this.getByClassName('PanoramaPlayer'); players = players.concat(this.getByClassName('VideoPlayer')); players = players.concat(this.getByClassName('Video360Player')); players = players.concat(this.getByClassName('PhotoAlbumPlayer')); return players; },
  "visibleComponentsIfPlayerFlagEnabled": function(components, playerFlag){  var enabled = this.get(playerFlag); for(var i in components){ components[i].set('visible', enabled); } },
  "getPlayListItemByMedia": function(playList, media){  var items = playList.get('items'); for(var j = 0, countJ = items.length; j<countJ; ++j){ var item = items[j]; if(item.get('media') == media) return item; } return undefined; },
  "getMediaByName": function(name){  var list = this.getByClassName('Media'); for(var i = 0, count = list.length; i<count; ++i){ var media = list[i]; if((media.get('class') == 'Audio' && media.get('data').label == name) || media.get('label') == name){ return media; } } return undefined; },
  "historyGoBack": function(playList){  var history = this.get('data')['history'][playList.get('id')]; if(history != undefined) { history.back(); } },
  "loadFromCurrentMediaPlayList": function(playList, delta){  var currentIndex = playList.get('selectedIndex'); var totalItems = playList.get('items').length; var newIndex = (currentIndex + delta) % totalItems; while(newIndex < 0){ newIndex = totalItems + newIndex; }; if(currentIndex != newIndex){ playList.set('selectedIndex', newIndex); } },
  "historyGoForward": function(playList){  var history = this.get('data')['history'][playList.get('id')]; if(history != undefined) { history.forward(); } },
  "getKey": function(key){  return window[key]; },
  "pauseGlobalAudio": function(audio){  var audios = window.currentGlobalAudios; if(audios){ audio = audios[audio.get('id')]; } if(audio.get('state') == 'playing') audio.pause(); },
  "getMediaFromPlayer": function(player){  switch(player.get('class')){ case 'PanoramaPlayer': return player.get('panorama') || player.get('video'); case 'VideoPlayer': case 'Video360Player': return player.get('video'); case 'PhotoAlbumPlayer': return player.get('photoAlbum'); case 'MapPlayer': return player.get('map'); } },
  "getPlayListWithMedia": function(media, onlySelected){  var playLists = this.getByClassName('PlayList'); for(var i = 0, count = playLists.length; i<count; ++i){ var playList = playLists[i]; if(onlySelected && playList.get('selectedIndex') == -1) continue; if(this.getPlayListItemByMedia(playList, media) != undefined) return playList; } return undefined; },
  "stopGlobalAudio": function(audio){  var audios = window.currentGlobalAudios; if(audios){ audio = audios[audio.get('id')]; if(audio){ delete audios[audio.get('id')]; if(Object.keys(audios).length == 0){ window.currentGlobalAudios = undefined; } } } if(audio) audio.stop(); },
  "playGlobalAudio": function(audio, endCallback){  var endFunction = function(){ audio.unbind('end', endFunction, this); this.stopGlobalAudio(audio); if(endCallback) endCallback(); }; audio = this.getGlobalAudio(audio); var audios = window.currentGlobalAudios; if(!audios){ audios = window.currentGlobalAudios = {}; } audios[audio.get('id')] = audio; if(audio.get('state') == 'playing'){ return audio; } if(!audio.get('loop')){ audio.bind('end', endFunction, this); } audio.play(); return audio; },
  "getMediaWidth": function(media){  switch(media.get('class')){ case 'Video360': var res = media.get('video'); if(res instanceof Array){ var maxW=0; for(var i=0; i<res.length; i++){ var r = res[i]; if(r.get('width') > maxW) maxW = r.get('width'); } return maxW; }else{ return r.get('width') } default: return media.get('width'); } },
  "showPopupPanoramaVideoOverlay": function(popupPanoramaOverlay, closeButtonProperties, stopAudios){  var self = this; var showEndFunction = function() { popupPanoramaOverlay.unbind('showEnd', showEndFunction); closeButton.bind('click', hideFunction, this); setCloseButtonPosition(); closeButton.set('visible', true); }; var endFunction = function() { if(!popupPanoramaOverlay.get('loop')) hideFunction(); }; var hideFunction = function() { self.MainViewer.set('toolTipEnabled', true); popupPanoramaOverlay.set('visible', false); closeButton.set('visible', false); closeButton.unbind('click', hideFunction, self); popupPanoramaOverlay.unbind('end', endFunction, self); popupPanoramaOverlay.unbind('hideEnd', hideFunction, self, true); self.resumePlayers(playersPaused, true); if(stopAudios) { self.resumeGlobalAudios(); } }; var setCloseButtonPosition = function() { var right = 10; var top = 10; closeButton.set('right', right); closeButton.set('top', top); }; this.MainViewer.set('toolTipEnabled', false); var closeButton = this.closeButtonPopupPanorama; if(closeButtonProperties){ for(var key in closeButtonProperties){ closeButton.set(key, closeButtonProperties[key]); } } var playersPaused = this.pauseCurrentPlayers(true); if(stopAudios) { this.pauseGlobalAudios(); } popupPanoramaOverlay.bind('end', endFunction, this, true); popupPanoramaOverlay.bind('showEnd', showEndFunction, this, true); popupPanoramaOverlay.bind('hideEnd', hideFunction, this, true); popupPanoramaOverlay.set('visible', true); },
  "changeBackgroundWhilePlay": function(playList, index, color){  var stopFunction = function(event){ playListItem.unbind('stop', stopFunction, this); if((color == viewerArea.get('backgroundColor')) && (colorRatios == viewerArea.get('backgroundColorRatios'))){ viewerArea.set('backgroundColor', backgroundColorBackup); viewerArea.set('backgroundColorRatios', backgroundColorRatiosBackup); } }; var playListItem = playList.get('items')[index]; var player = playListItem.get('player'); var viewerArea = player.get('viewerArea'); var backgroundColorBackup = viewerArea.get('backgroundColor'); var backgroundColorRatiosBackup = viewerArea.get('backgroundColorRatios'); var colorRatios = [0]; if((color != backgroundColorBackup) || (colorRatios != backgroundColorRatiosBackup)){ viewerArea.set('backgroundColor', color); viewerArea.set('backgroundColorRatios', colorRatios); playListItem.bind('stop', stopFunction, this); } },
  "initGA": function(){  var sendFunc = function(category, event, label) { ga('send', 'event', category, event, label); }; var media = this.getByClassName('Panorama'); media = media.concat(this.getByClassName('Video360')); media = media.concat(this.getByClassName('Map')); for(var i = 0, countI = media.length; i<countI; ++i){ var m = media[i]; var mediaLabel = m.get('label'); var overlays = this.getOverlays(m); for(var j = 0, countJ = overlays.length; j<countJ; ++j){ var overlay = overlays[j]; var overlayLabel = overlay.get('data') != undefined ? mediaLabel + ' - ' + overlay.get('data')['label'] : mediaLabel; switch(overlay.get('class')) { case 'HotspotPanoramaOverlay': case 'HotspotMapOverlay': var areas = overlay.get('areas'); for (var z = 0; z<areas.length; ++z) { areas[z].bind('click', sendFunc.bind(this, 'Hotspot', 'click', overlayLabel), this); } break; case 'CeilingCapPanoramaOverlay': case 'TripodCapPanoramaOverlay': overlay.bind('click', sendFunc.bind(this, 'Cap', 'click', overlayLabel), this); break; } } } var components = this.getByClassName('Button'); components = components.concat(this.getByClassName('IconButton')); for(var i = 0, countI = components.length; i<countI; ++i){ var c = components[i]; var componentLabel = c.get('data')['name']; c.bind('click', sendFunc.bind(this, 'Skin', 'click', componentLabel), this); } var items = this.getByClassName('PlayListItem'); var media2Item = {}; for(var i = 0, countI = items.length; i<countI; ++i) { var item = items[i]; var media = item.get('media'); if(!(media.get('id') in media2Item)) { item.bind('begin', sendFunc.bind(this, 'Media', 'play', media.get('label')), this); media2Item[media.get('id')] = item; } } },
  "resumePlayers": function(players, onlyResumeCameraIfPanorama){  for(var i = 0; i<players.length; ++i){ var player = players[i]; if(onlyResumeCameraIfPanorama && player.get('class') == 'PanoramaPlayer' && typeof player.get('video') === 'undefined'){ player.resumeCamera(); } else{ player.play(); } } },
  "showWindow": function(w, autoCloseMilliSeconds, containsAudio){  if(w.get('visible') == true){ return; } var closeFunction = function(){ clearAutoClose(); this.resumePlayers(playersPaused, !containsAudio); w.unbind('close', closeFunction, this); }; var clearAutoClose = function(){ w.unbind('click', clearAutoClose, this); if(timeoutID != undefined){ clearTimeout(timeoutID); } }; var timeoutID = undefined; if(autoCloseMilliSeconds){ var autoCloseFunction = function(){ w.hide(); }; w.bind('click', clearAutoClose, this); timeoutID = setTimeout(autoCloseFunction, autoCloseMilliSeconds); } var playersPaused = this.pauseCurrentPlayers(!containsAudio); w.bind('close', closeFunction, this); w.show(this, true); },
  "init": function(){  if(!Object.hasOwnProperty('values')) { Object.values = function(o){ return Object.keys(o).map(function(e) { return o[e]; }); }; } var history = this.get('data')['history']; var playListChangeFunc = function(e){ var playList = e.source; var index = playList.get('selectedIndex'); if(index < 0) return; var id = playList.get('id'); if(!history.hasOwnProperty(id)) history[id] = new HistoryData(playList); history[id].add(index); }; var playLists = this.getByClassName('PlayList'); for(var i = 0, count = playLists.length; i<count; ++i) { var playList = playLists[i]; playList.bind('change', playListChangeFunc, this); } },
  "playAudioList": function(audios){  if(audios.length == 0) return; var currentAudioCount = -1; var currentAudio; var playGlobalAudioFunction = this.playGlobalAudio; var playNext = function(){ if(++currentAudioCount >= audios.length) currentAudioCount = 0; currentAudio = audios[currentAudioCount]; playGlobalAudioFunction(currentAudio, playNext); }; playNext(); },
  "getPixels": function(value){  var result = new RegExp('((\\+|\\-)?\\d+(\\.\\d*)?)(px|vw|vh|vmin|vmax)?', 'i').exec(value); if (result == undefined) { return 0; } var num = parseFloat(result[1]); var unit = result[4]; var vw = this.rootPlayer.get('actualWidth') / 100; var vh = this.rootPlayer.get('actualHeight') / 100; switch(unit) { case 'vw': return num * vw; case 'vh': return num * vh; case 'vmin': return num * Math.min(vw, vh); case 'vmax': return num * Math.max(vw, vh); default: return num; } },
  "resumeGlobalAudios": function(caller){  if (window.pauseGlobalAudiosState == undefined || !(caller in window.pauseGlobalAudiosState)) return; var audiosPaused = window.pauseGlobalAudiosState[caller]; delete window.pauseGlobalAudiosState[caller]; var values = Object.values(window.pauseGlobalAudiosState); for (var i = 0, count = values.length; i<count; ++i) { var objAudios = values[i]; for (var j = audiosPaused.length-1; j>=0; --j) { var a = audiosPaused[j]; if(objAudios.indexOf(a) != -1) audiosPaused.splice(j, 1); } } for (var i = 0, count = audiosPaused.length; i<count; ++i) { var a = audiosPaused[i]; if (a.get('state') == 'paused') a.play(); } },
  "getMediaHeight": function(media){  switch(media.get('class')){ case 'Video360': var res = media.get('video'); if(res instanceof Array){ var maxH=0; for(var i=0; i<res.length; i++){ var r = res[i]; if(r.get('height') > maxH) maxH = r.get('height'); } return maxH; }else{ return r.get('height') } default: return media.get('height'); } },
  "getComponentByName": function(name){  var list = this.getByClassName('UIComponent'); for(var i = 0, count = list.length; i<count; ++i){ var component = list[i]; var data = component.get('data'); if(data != undefined && data.name == name){ return component; } } return undefined; },
  "setOverlayBehaviour": function(overlay, media, action){  var executeFunc = function() { switch(action){ case 'triggerClick': this.triggerOverlay(overlay, 'click'); break; case 'stop': case 'play': case 'pause': overlay[action](); break; case 'togglePlayPause': case 'togglePlayStop': if(overlay.get('state') == 'playing') overlay[action == 'togglePlayPause' ? 'pause' : 'stop'](); else overlay.play(); break; } if(window.overlaysDispatched == undefined) window.overlaysDispatched = {}; var id = overlay.get('id'); window.overlaysDispatched[id] = true; setTimeout(function(){ delete window.overlaysDispatched[id]; }, 2000); }; if(window.overlaysDispatched != undefined && overlay.get('id') in window.overlaysDispatched) return; var playList = this.getPlayListWithMedia(media, true); if(playList != undefined){ var item = this.getPlayListItemByMedia(playList, media); if(playList.get('items').indexOf(item) != playList.get('selectedIndex')){ var beginFunc = function(e){ item.unbind('begin', beginFunc, this); executeFunc.call(this); }; item.bind('begin', beginFunc, this); return; } } executeFunc.call(this); },
  "unregisterKey": function(key){  delete window[key]; },
  "getPanoramaOverlayByName": function(panorama, name){  var overlays = this.getOverlays(panorama); for(var i = 0, count = overlays.length; i<count; ++i){ var overlay = overlays[i]; var data = overlay.get('data'); if(data != undefined && data.label == name){ return overlay; } } return undefined; },
  "shareFacebook": function(url){  window.open('https://www.facebook.com/sharer/sharer.php?u=' + url, '_blank'); },
  "changePlayListWithSameSpot": function(playList, newIndex){  var currentIndex = playList.get('selectedIndex'); if (currentIndex >= 0 && newIndex >= 0 && currentIndex != newIndex) { var currentItem = playList.get('items')[currentIndex]; var newItem = playList.get('items')[newIndex]; var currentPlayer = currentItem.get('player'); var newPlayer = newItem.get('player'); if ((currentPlayer.get('class') == 'PanoramaPlayer' || currentPlayer.get('class') == 'Video360Player') && (newPlayer.get('class') == 'PanoramaPlayer' || newPlayer.get('class') == 'Video360Player')) { var newCamera = this.cloneCamera(newItem.get('camera')); this.setCameraSameSpotAsMedia(newCamera, currentItem.get('media')); this.startPanoramaWithCamera(newItem.get('media'), newCamera); } } },
  "pauseGlobalAudios": function(caller, exclude){  if (window.pauseGlobalAudiosState == undefined) window.pauseGlobalAudiosState = {}; if (window.pauseGlobalAudiosList == undefined) window.pauseGlobalAudiosList = []; if (caller in window.pauseGlobalAudiosState) { return; } var audios = this.getByClassName('Audio').concat(this.getByClassName('VideoPanoramaOverlay')); if (window.currentGlobalAudios != undefined) audios = audios.concat(Object.values(window.currentGlobalAudios)); var audiosPaused = []; var values = Object.values(window.pauseGlobalAudiosState); for (var i = 0, count = values.length; i<count; ++i) { var objAudios = values[i]; for (var j = 0; j<objAudios.length; ++j) { var a = objAudios[j]; if(audiosPaused.indexOf(a) == -1) audiosPaused.push(a); } } window.pauseGlobalAudiosState[caller] = audiosPaused; for (var i = 0, count = audios.length; i < count; ++i) { var a = audios[i]; if (a.get('state') == 'playing' && (exclude == undefined || exclude.indexOf(a) == -1)) { a.pause(); audiosPaused.push(a); } } },
  "setStartTimeVideoSync": function(video, player){  this.setStartTimeVideo(video, player.get('currentTime')); },
  "executeFunctionWhenChange": function(playList, index, endFunction, changeFunction){  var endObject = undefined; var changePlayListFunction = function(event){ if(event.data.previousSelectedIndex == index){ if(changeFunction) changeFunction.call(this); if(endFunction && endObject) endObject.unbind('end', endFunction, this); playList.unbind('change', changePlayListFunction, this); } }; if(endFunction){ var playListItem = playList.get('items')[index]; if(playListItem.get('class') == 'PanoramaPlayListItem'){ var camera = playListItem.get('camera'); if(camera != undefined) endObject = camera.get('initialSequence'); if(endObject == undefined) endObject = camera.get('idleSequence'); } else{ endObject = playListItem.get('media'); } if(endObject){ endObject.bind('end', endFunction, this); } } playList.bind('change', changePlayListFunction, this); },
  "setComponentVisibility": function(component, visible, applyAt, effect, propertyEffect, ignoreClearTimeout){  var keepVisibility = this.getKey('keepVisibility_' + component.get('id')); if(keepVisibility) return; this.unregisterKey('visibility_'+component.get('id')); var changeVisibility = function(){ if(effect && propertyEffect){ component.set(propertyEffect, effect); } component.set('visible', visible); if(component.get('class') == 'ViewerArea'){ try{ if(visible) component.restart(); else if(component.get('playbackState') == 'playing') component.pause(); } catch(e){}; } }; var effectTimeoutName = 'effectTimeout_'+component.get('id'); if(!ignoreClearTimeout && window.hasOwnProperty(effectTimeoutName)){ var effectTimeout = window[effectTimeoutName]; if(effectTimeout instanceof Array){ for(var i=0; i<effectTimeout.length; i++){ clearTimeout(effectTimeout[i]) } }else{ clearTimeout(effectTimeout); } delete window[effectTimeoutName]; } else if(visible == component.get('visible') && !ignoreClearTimeout) return; if(applyAt && applyAt > 0){ var effectTimeout = setTimeout(function(){ if(window[effectTimeoutName] instanceof Array) { var arrayTimeoutVal = window[effectTimeoutName]; var index = arrayTimeoutVal.indexOf(effectTimeout); arrayTimeoutVal.splice(index, 1); if(arrayTimeoutVal.length == 0){ delete window[effectTimeoutName]; } }else{ delete window[effectTimeoutName]; } changeVisibility(); }, applyAt); if(window.hasOwnProperty(effectTimeoutName)){ window[effectTimeoutName] = [window[effectTimeoutName], effectTimeout]; }else{ window[effectTimeoutName] = effectTimeout; } } else{ changeVisibility(); } },
  "shareWhatsapp": function(url){  window.open('https://api.whatsapp.com/send/?text=' + encodeURIComponent(url), '_blank'); },
  "setPanoramaCameraWithSpot": function(playListItem, yaw, pitch){  var panorama = playListItem.get('media'); var newCamera = this.cloneCamera(playListItem.get('camera')); var initialPosition = newCamera.get('initialPosition'); initialPosition.set('yaw', yaw); initialPosition.set('pitch', pitch); this.startPanoramaWithCamera(panorama, newCamera); },
  "keepComponentVisibility": function(component, keep){  var key = 'keepVisibility_' + component.get('id'); var value = this.getKey(key); if(value == undefined && keep) { this.registerKey(key, keep); } else if(value != undefined && !keep) { this.unregisterKey(key); } },
  "cloneCamera": function(camera){  var newCamera = this.rootPlayer.createInstance(camera.get('class')); newCamera.set('id', camera.get('id') + '_copy'); newCamera.set('idleSequence', camera.get('initialSequence')); return newCamera; },
  "startPanoramaWithCamera": function(media, camera){  if(window.currentPanoramasWithCameraChanged != undefined && window.currentPanoramasWithCameraChanged.indexOf(media) != -1){ return; } var playLists = this.getByClassName('PlayList'); if(playLists.length == 0) return; var restoreItems = []; for(var i = 0, count = playLists.length; i<count; ++i){ var playList = playLists[i]; var items = playList.get('items'); for(var j = 0, countJ = items.length; j<countJ; ++j){ var item = items[j]; if(item.get('media') == media && (item.get('class') == 'PanoramaPlayListItem' || item.get('class') == 'Video360PlayListItem')){ restoreItems.push({camera: item.get('camera'), item: item}); item.set('camera', camera); } } } if(restoreItems.length > 0) { if(window.currentPanoramasWithCameraChanged == undefined) { window.currentPanoramasWithCameraChanged = [media]; } else { window.currentPanoramasWithCameraChanged.push(media); } var restoreCameraOnStop = function(){ var index = window.currentPanoramasWithCameraChanged.indexOf(media); if(index != -1) { window.currentPanoramasWithCameraChanged.splice(index, 1); } for (var i = 0; i < restoreItems.length; i++) { restoreItems[i].item.set('camera', restoreItems[i].camera); restoreItems[i].item.unbind('stop', restoreCameraOnStop, this); } }; for (var i = 0; i < restoreItems.length; i++) { restoreItems[i].item.bind('stop', restoreCameraOnStop, this); } } },
  "loopAlbum": function(playList, index){  var playListItem = playList.get('items')[index]; var player = playListItem.get('player'); var loopFunction = function(){ player.play(); }; this.executeFunctionWhenChange(playList, index, loopFunction); },
  "stopAndGoCamera": function(camera, ms){  var sequence = camera.get('initialSequence'); sequence.pause(); var timeoutFunction = function(){ sequence.play(); }; setTimeout(timeoutFunction, ms); },
  "getCurrentPlayerWithMedia": function(media){  var playerClass = undefined; var mediaPropertyName = undefined; switch(media.get('class')) { case 'Panorama': case 'LivePanorama': case 'HDRPanorama': playerClass = 'PanoramaPlayer'; mediaPropertyName = 'panorama'; break; case 'Video360': playerClass = 'PanoramaPlayer'; mediaPropertyName = 'video'; break; case 'PhotoAlbum': playerClass = 'PhotoAlbumPlayer'; mediaPropertyName = 'photoAlbum'; break; case 'Map': playerClass = 'MapPlayer'; mediaPropertyName = 'map'; break; case 'Video': playerClass = 'VideoPlayer'; mediaPropertyName = 'video'; break; }; if(playerClass != undefined) { var players = this.getByClassName(playerClass); for(var i = 0; i<players.length; ++i){ var player = players[i]; if(player.get(mediaPropertyName) == media) { return player; } } } else { return undefined; } },
  "getOverlays": function(media){  switch(media.get('class')){ case 'Panorama': var overlays = media.get('overlays').concat() || []; var frames = media.get('frames'); for(var j = 0; j<frames.length; ++j){ overlays = overlays.concat(frames[j].get('overlays') || []); } return overlays; case 'Video360': case 'Map': return media.get('overlays') || []; default: return []; } },
  "fixTogglePlayPauseButton": function(player){  var state = player.get('state'); var buttons = player.get('buttonPlayPause'); if(typeof buttons !== 'undefined' && player.get('state') == 'playing'){ if(!Array.isArray(buttons)) buttons = [buttons]; for(var i = 0; i<buttons.length; ++i) buttons[i].set('pressed', true); } },
  "setMediaBehaviour": function(playList, index, mediaDispatcher){  var self = this; var stateChangeFunction = function(event){ if(event.data.state == 'stopped'){ dispose.call(this, true); } }; var onBeginFunction = function() { item.unbind('begin', onBeginFunction, self); var media = item.get('media'); if(media.get('class') != 'Panorama' || (media.get('camera') != undefined && media.get('camera').get('initialSequence') != undefined)){ player.bind('stateChange', stateChangeFunction, self); } }; var changeFunction = function(){ var index = playListDispatcher.get('selectedIndex'); if(index != -1){ indexDispatcher = index; dispose.call(this, false); } }; var disposeCallback = function(){ dispose.call(this, false); }; var dispose = function(forceDispose){ if(!playListDispatcher) return; var media = item.get('media'); if((media.get('class') == 'Video360' || media.get('class') == 'Video') && media.get('loop') == true && !forceDispose) return; playList.set('selectedIndex', -1); if(panoramaSequence && panoramaSequenceIndex != -1){ if(panoramaSequence) { if(panoramaSequenceIndex > 0 && panoramaSequence.get('movements')[panoramaSequenceIndex-1].get('class') == 'TargetPanoramaCameraMovement'){ var initialPosition = camera.get('initialPosition'); var oldYaw = initialPosition.get('yaw'); var oldPitch = initialPosition.get('pitch'); var oldHfov = initialPosition.get('hfov'); var previousMovement = panoramaSequence.get('movements')[panoramaSequenceIndex-1]; initialPosition.set('yaw', previousMovement.get('targetYaw')); initialPosition.set('pitch', previousMovement.get('targetPitch')); initialPosition.set('hfov', previousMovement.get('targetHfov')); var restoreInitialPositionFunction = function(event){ initialPosition.set('yaw', oldYaw); initialPosition.set('pitch', oldPitch); initialPosition.set('hfov', oldHfov); itemDispatcher.unbind('end', restoreInitialPositionFunction, this); }; itemDispatcher.bind('end', restoreInitialPositionFunction, this); } panoramaSequence.set('movementIndex', panoramaSequenceIndex); } } if(player){ item.unbind('begin', onBeginFunction, this); player.unbind('stateChange', stateChangeFunction, this); for(var i = 0; i<buttons.length; ++i) { buttons[i].unbind('click', disposeCallback, this); } } if(sameViewerArea){ var currentMedia = this.getMediaFromPlayer(player); if(currentMedia == undefined || currentMedia == item.get('media')){ playListDispatcher.set('selectedIndex', indexDispatcher); } if(playList != playListDispatcher) playListDispatcher.unbind('change', changeFunction, this); } else{ viewerArea.set('visible', viewerVisibility); } playListDispatcher = undefined; }; var mediaDispatcherByParam = mediaDispatcher != undefined; if(!mediaDispatcher){ var currentIndex = playList.get('selectedIndex'); var currentPlayer = (currentIndex != -1) ? playList.get('items')[playList.get('selectedIndex')].get('player') : this.getActivePlayerWithViewer(this.MainViewer); if(currentPlayer) { mediaDispatcher = this.getMediaFromPlayer(currentPlayer); } } var playListDispatcher = mediaDispatcher ? this.getPlayListWithMedia(mediaDispatcher, true) : undefined; if(!playListDispatcher){ playList.set('selectedIndex', index); return; } var indexDispatcher = playListDispatcher.get('selectedIndex'); if(playList.get('selectedIndex') == index || indexDispatcher == -1){ return; } var item = playList.get('items')[index]; var itemDispatcher = playListDispatcher.get('items')[indexDispatcher]; var player = item.get('player'); var viewerArea = player.get('viewerArea'); var viewerVisibility = viewerArea.get('visible'); var sameViewerArea = viewerArea == itemDispatcher.get('player').get('viewerArea'); if(sameViewerArea){ if(playList != playListDispatcher){ playListDispatcher.set('selectedIndex', -1); playListDispatcher.bind('change', changeFunction, this); } } else{ viewerArea.set('visible', true); } var panoramaSequenceIndex = -1; var panoramaSequence = undefined; var camera = itemDispatcher.get('camera'); if(camera){ panoramaSequence = camera.get('initialSequence'); if(panoramaSequence) { panoramaSequenceIndex = panoramaSequence.get('movementIndex'); } } playList.set('selectedIndex', index); var buttons = []; var addButtons = function(property){ var value = player.get(property); if(value == undefined) return; if(Array.isArray(value)) buttons = buttons.concat(value); else buttons.push(value); }; addButtons('buttonStop'); for(var i = 0; i<buttons.length; ++i) { buttons[i].bind('click', disposeCallback, this); } if(player != itemDispatcher.get('player') || !mediaDispatcherByParam){ item.bind('begin', onBeginFunction, self); } this.executeFunctionWhenChange(playList, index, disposeCallback); },
  "getGlobalAudio": function(audio){  var audios = window.currentGlobalAudios; if(audios != undefined && audio.get('id') in audios){ audio = audios[audio.get('id')]; } return audio; },
  "existsKey": function(key){  return key in window; },
  "pauseCurrentPlayers": function(onlyPauseCameraIfPanorama){  var players = this.getCurrentPlayers(); var i = players.length; while(i-- > 0){ var player = players[i]; if(player.get('state') == 'playing') { if(onlyPauseCameraIfPanorama && player.get('class') == 'PanoramaPlayer' && typeof player.get('video') === 'undefined'){ player.pauseCamera(); } else { player.pause(); } } else { players.splice(i, 1); } } return players; },
  "isCardboardViewMode": function(){  var players = this.getByClassName('PanoramaPlayer'); return players.length > 0 && players[0].get('viewMode') == 'cardboard'; },
  "setMainMediaByName": function(name){  var items = this.mainPlayList.get('items'); for(var i = 0; i<items.length; ++i){ var item = items[i]; if(item.get('media').get('label') == name) { this.mainPlayList.set('selectedIndex', i); return item; } } },
  "shareTwitter": function(url){  window.open('https://twitter.com/intent/tweet?source=webclient&url=' + url, '_blank'); },
  "setStartTimeVideo": function(video, time){  var items = this.getPlayListItems(video); var startTimeBackup = []; var restoreStartTimeFunc = function() { for(var i = 0; i<items.length; ++i){ var item = items[i]; item.set('startTime', startTimeBackup[i]); item.unbind('stop', restoreStartTimeFunc, this); } }; for(var i = 0; i<items.length; ++i) { var item = items[i]; var player = item.get('player'); if(player.get('video') == video && player.get('state') == 'playing') { player.seek(time); } else { startTimeBackup.push(item.get('startTime')); item.set('startTime', time); item.bind('stop', restoreStartTimeFunc, this); } } },
  "showPopupMedia": function(w, media, playList, popupMaxWidth, popupMaxHeight, autoCloseWhenFinished, stopAudios){  var self = this; var closeFunction = function(){ playList.set('selectedIndex', -1); self.MainViewer.set('toolTipEnabled', true); if(stopAudios) { self.resumeGlobalAudios(); } this.resumePlayers(playersPaused, !stopAudios); if(isVideo) { this.unbind('resize', resizeFunction, this); } w.unbind('close', closeFunction, this); }; var endFunction = function(){ w.hide(); }; var resizeFunction = function(){ var getWinValue = function(property){ return w.get(property) || 0; }; var parentWidth = self.get('actualWidth'); var parentHeight = self.get('actualHeight'); var mediaWidth = self.getMediaWidth(media); var mediaHeight = self.getMediaHeight(media); var popupMaxWidthNumber = parseFloat(popupMaxWidth) / 100; var popupMaxHeightNumber = parseFloat(popupMaxHeight) / 100; var windowWidth = popupMaxWidthNumber * parentWidth; var windowHeight = popupMaxHeightNumber * parentHeight; var footerHeight = getWinValue('footerHeight'); var headerHeight = getWinValue('headerHeight'); if(!headerHeight) { var closeButtonHeight = getWinValue('closeButtonIconHeight') + getWinValue('closeButtonPaddingTop') + getWinValue('closeButtonPaddingBottom'); var titleHeight = self.getPixels(getWinValue('titleFontSize')) + getWinValue('titlePaddingTop') + getWinValue('titlePaddingBottom'); headerHeight = closeButtonHeight > titleHeight ? closeButtonHeight : titleHeight; headerHeight += getWinValue('headerPaddingTop') + getWinValue('headerPaddingBottom'); } var contentWindowWidth = windowWidth - getWinValue('bodyPaddingLeft') - getWinValue('bodyPaddingRight') - getWinValue('paddingLeft') - getWinValue('paddingRight'); var contentWindowHeight = windowHeight - headerHeight - footerHeight - getWinValue('bodyPaddingTop') - getWinValue('bodyPaddingBottom') - getWinValue('paddingTop') - getWinValue('paddingBottom'); var parentAspectRatio = contentWindowWidth / contentWindowHeight; var mediaAspectRatio = mediaWidth / mediaHeight; if(parentAspectRatio > mediaAspectRatio) { windowWidth = contentWindowHeight * mediaAspectRatio + getWinValue('bodyPaddingLeft') + getWinValue('bodyPaddingRight') + getWinValue('paddingLeft') + getWinValue('paddingRight'); } else { windowHeight = contentWindowWidth / mediaAspectRatio + headerHeight + footerHeight + getWinValue('bodyPaddingTop') + getWinValue('bodyPaddingBottom') + getWinValue('paddingTop') + getWinValue('paddingBottom'); } if(windowWidth > parentWidth * popupMaxWidthNumber) { windowWidth = parentWidth * popupMaxWidthNumber; } if(windowHeight > parentHeight * popupMaxHeightNumber) { windowHeight = parentHeight * popupMaxHeightNumber; } w.set('width', windowWidth); w.set('height', windowHeight); w.set('x', (parentWidth - getWinValue('actualWidth')) * 0.5); w.set('y', (parentHeight - getWinValue('actualHeight')) * 0.5); }; if(autoCloseWhenFinished){ this.executeFunctionWhenChange(playList, 0, endFunction); } var mediaClass = media.get('class'); var isVideo = mediaClass == 'Video' || mediaClass == 'Video360'; playList.set('selectedIndex', 0); if(isVideo){ this.bind('resize', resizeFunction, this); resizeFunction(); playList.get('items')[0].get('player').play(); } else { w.set('width', popupMaxWidth); w.set('height', popupMaxHeight); } this.MainViewer.set('toolTipEnabled', false); if(stopAudios) { this.pauseGlobalAudios(); } var playersPaused = this.pauseCurrentPlayers(!stopAudios); w.bind('close', closeFunction, this); w.show(this, true); },
  "showComponentsWhileMouseOver": function(parentComponent, components, durationVisibleWhileOut){  var setVisibility = function(visible){ for(var i = 0, length = components.length; i<length; i++){ var component = components[i]; if(component.get('class') == 'HTMLText' && (component.get('html') == '' || component.get('html') == undefined)) { continue; } component.set('visible', visible); } }; if (this.rootPlayer.get('touchDevice') == true){ setVisibility(true); } else { var timeoutID = -1; var rollOverFunction = function(){ setVisibility(true); if(timeoutID >= 0) clearTimeout(timeoutID); parentComponent.unbind('rollOver', rollOverFunction, this); parentComponent.bind('rollOut', rollOutFunction, this); }; var rollOutFunction = function(){ var timeoutFunction = function(){ setVisibility(false); parentComponent.unbind('rollOver', rollOverFunction, this); }; parentComponent.unbind('rollOut', rollOutFunction, this); parentComponent.bind('rollOver', rollOverFunction, this); timeoutID = setTimeout(timeoutFunction, durationVisibleWhileOut); }; parentComponent.bind('rollOver', rollOverFunction, this); } },
  "syncPlaylists": function(playLists){  var changeToMedia = function(media, playListDispatched){ for(var i = 0, count = playLists.length; i<count; ++i){ var playList = playLists[i]; if(playList != playListDispatched){ var items = playList.get('items'); for(var j = 0, countJ = items.length; j<countJ; ++j){ if(items[j].get('media') == media){ if(playList.get('selectedIndex') != j){ playList.set('selectedIndex', j); } break; } } } } }; var changeFunction = function(event){ var playListDispatched = event.source; var selectedIndex = playListDispatched.get('selectedIndex'); if(selectedIndex < 0) return; var media = playListDispatched.get('items')[selectedIndex].get('media'); changeToMedia(media, playListDispatched); }; var mapPlayerChangeFunction = function(event){ var panoramaMapLocation = event.source.get('panoramaMapLocation'); if(panoramaMapLocation){ var map = panoramaMapLocation.get('map'); changeToMedia(map); } }; for(var i = 0, count = playLists.length; i<count; ++i){ playLists[i].bind('change', changeFunction, this); } var mapPlayers = this.getByClassName('MapPlayer'); for(var i = 0, count = mapPlayers.length; i<count; ++i){ mapPlayers[i].bind('panoramaMapLocation_change', mapPlayerChangeFunction, this); } },
  "registerKey": function(key, value){  window[key] = value; },
  "showPopupImage": function(image, toggleImage, customWidth, customHeight, showEffect, hideEffect, closeButtonProperties, autoCloseMilliSeconds, audio, stopBackgroundAudio, loadedCallback, hideCallback){  var self = this; var closed = false; var playerClickFunction = function() { zoomImage.unbind('loaded', loadedFunction, self); hideFunction(); }; var clearAutoClose = function(){ zoomImage.unbind('click', clearAutoClose, this); if(timeoutID != undefined){ clearTimeout(timeoutID); } }; var resizeFunction = function(){ setTimeout(setCloseButtonPosition, 0); }; var loadedFunction = function(){ self.unbind('click', playerClickFunction, self); veil.set('visible', true); setCloseButtonPosition(); closeButton.set('visible', true); zoomImage.unbind('loaded', loadedFunction, this); zoomImage.bind('userInteractionStart', userInteractionStartFunction, this); zoomImage.bind('userInteractionEnd', userInteractionEndFunction, this); zoomImage.bind('resize', resizeFunction, this); timeoutID = setTimeout(timeoutFunction, 200); }; var timeoutFunction = function(){ timeoutID = undefined; if(autoCloseMilliSeconds){ var autoCloseFunction = function(){ hideFunction(); }; zoomImage.bind('click', clearAutoClose, this); timeoutID = setTimeout(autoCloseFunction, autoCloseMilliSeconds); } zoomImage.bind('backgroundClick', hideFunction, this); if(toggleImage) { zoomImage.bind('click', toggleFunction, this); zoomImage.set('imageCursor', 'hand'); } closeButton.bind('click', hideFunction, this); if(loadedCallback) loadedCallback(); }; var hideFunction = function() { self.MainViewer.set('toolTipEnabled', true); closed = true; if(timeoutID) clearTimeout(timeoutID); if (timeoutUserInteractionID) clearTimeout(timeoutUserInteractionID); if(autoCloseMilliSeconds) clearAutoClose(); if(hideCallback) hideCallback(); zoomImage.set('visible', false); if(hideEffect && hideEffect.get('duration') > 0){ hideEffect.bind('end', endEffectFunction, this); } else{ zoomImage.set('image', null); } closeButton.set('visible', false); veil.set('visible', false); self.unbind('click', playerClickFunction, self); zoomImage.unbind('backgroundClick', hideFunction, this); zoomImage.unbind('userInteractionStart', userInteractionStartFunction, this); zoomImage.unbind('userInteractionEnd', userInteractionEndFunction, this, true); zoomImage.unbind('resize', resizeFunction, this); if(toggleImage) { zoomImage.unbind('click', toggleFunction, this); zoomImage.set('cursor', 'default'); } closeButton.unbind('click', hideFunction, this); self.resumePlayers(playersPaused, audio == null || stopBackgroundAudio); if(audio){ if(stopBackgroundAudio){ self.resumeGlobalAudios(); } self.stopGlobalAudio(audio); } }; var endEffectFunction = function() { zoomImage.set('image', null); hideEffect.unbind('end', endEffectFunction, this); }; var toggleFunction = function() { zoomImage.set('image', isToggleVisible() ? image : toggleImage); }; var isToggleVisible = function() { return zoomImage.get('image') == toggleImage; }; var setCloseButtonPosition = function() { var right = zoomImage.get('actualWidth') - zoomImage.get('imageLeft') - zoomImage.get('imageWidth') + 10; var top = zoomImage.get('imageTop') + 10; if(right < 10) right = 10; if(top < 10) top = 10; closeButton.set('right', right); closeButton.set('top', top); }; var userInteractionStartFunction = function() { if(timeoutUserInteractionID){ clearTimeout(timeoutUserInteractionID); timeoutUserInteractionID = undefined; } else{ closeButton.set('visible', false); } }; var userInteractionEndFunction = function() { if(!closed){ timeoutUserInteractionID = setTimeout(userInteractionTimeoutFunction, 300); } }; var userInteractionTimeoutFunction = function() { timeoutUserInteractionID = undefined; closeButton.set('visible', true); setCloseButtonPosition(); }; this.MainViewer.set('toolTipEnabled', false); var veil = this.veilPopupPanorama; var zoomImage = this.zoomImagePopupPanorama; var closeButton = this.closeButtonPopupPanorama; if(closeButtonProperties){ for(var key in closeButtonProperties){ closeButton.set(key, closeButtonProperties[key]); } } var playersPaused = this.pauseCurrentPlayers(audio == null || !stopBackgroundAudio); if(audio){ if(stopBackgroundAudio){ this.pauseGlobalAudios(); } this.playGlobalAudio(audio); } var timeoutID = undefined; var timeoutUserInteractionID = undefined; zoomImage.bind('loaded', loadedFunction, this); setTimeout(function(){ self.bind('click', playerClickFunction, self, false); }, 0); zoomImage.set('image', image); zoomImage.set('customWidth', customWidth); zoomImage.set('customHeight', customHeight); zoomImage.set('showEffect', showEffect); zoomImage.set('hideEffect', hideEffect); zoomImage.set('visible', true); return zoomImage; },
  "triggerOverlay": function(overlay, eventName){  if(overlay.get('areas') != undefined) { var areas = overlay.get('areas'); for(var i = 0; i<areas.length; ++i) { areas[i].trigger(eventName); } } else { overlay.trigger(eventName); } },
  "openLink": function(url, name){  if(url == location.href) { return; } var isElectron = (window && window.process && window.process.versions && window.process.versions['electron']) || (navigator && navigator.userAgent && navigator.userAgent.indexOf('Electron') >= 0); if (name == '_blank' && isElectron) { if (url.startsWith('/')) { var r = window.location.href.split('/'); r.pop(); url = r.join('/') + url; } var extension = url.split('.').pop().toLowerCase(); if(extension != 'pdf' || url.startsWith('file://')) { var shell = window.require('electron').shell; shell.openExternal(url); } else { window.open(url, name); } } else if(isElectron && (name == '_top' || name == '_self')) { window.location = url; } else { var newWindow = window.open(url, name); newWindow.focus(); } },
  "showPopupPanoramaOverlay": function(popupPanoramaOverlay, closeButtonProperties, imageHD, toggleImage, toggleImageHD, autoCloseMilliSeconds, audio, stopBackgroundAudio){  var self = this; this.MainViewer.set('toolTipEnabled', false); var cardboardEnabled = this.isCardboardViewMode(); if(!cardboardEnabled) { var zoomImage = this.zoomImagePopupPanorama; var showDuration = popupPanoramaOverlay.get('showDuration'); var hideDuration = popupPanoramaOverlay.get('hideDuration'); var playersPaused = this.pauseCurrentPlayers(audio == null || !stopBackgroundAudio); var popupMaxWidthBackup = popupPanoramaOverlay.get('popupMaxWidth'); var popupMaxHeightBackup = popupPanoramaOverlay.get('popupMaxHeight'); var showEndFunction = function() { var loadedFunction = function(){ if(!self.isCardboardViewMode()) popupPanoramaOverlay.set('visible', false); }; popupPanoramaOverlay.unbind('showEnd', showEndFunction, self); popupPanoramaOverlay.set('showDuration', 1); popupPanoramaOverlay.set('hideDuration', 1); self.showPopupImage(imageHD, toggleImageHD, popupPanoramaOverlay.get('popupMaxWidth'), popupPanoramaOverlay.get('popupMaxHeight'), null, null, closeButtonProperties, autoCloseMilliSeconds, audio, stopBackgroundAudio, loadedFunction, hideFunction); }; var hideFunction = function() { var restoreShowDurationFunction = function(){ popupPanoramaOverlay.unbind('showEnd', restoreShowDurationFunction, self); popupPanoramaOverlay.set('visible', false); popupPanoramaOverlay.set('showDuration', showDuration); popupPanoramaOverlay.set('popupMaxWidth', popupMaxWidthBackup); popupPanoramaOverlay.set('popupMaxHeight', popupMaxHeightBackup); }; self.resumePlayers(playersPaused, audio == null || !stopBackgroundAudio); var currentWidth = zoomImage.get('imageWidth'); var currentHeight = zoomImage.get('imageHeight'); popupPanoramaOverlay.bind('showEnd', restoreShowDurationFunction, self, true); popupPanoramaOverlay.set('showDuration', 1); popupPanoramaOverlay.set('hideDuration', hideDuration); popupPanoramaOverlay.set('popupMaxWidth', currentWidth); popupPanoramaOverlay.set('popupMaxHeight', currentHeight); if(popupPanoramaOverlay.get('visible')) restoreShowDurationFunction(); else popupPanoramaOverlay.set('visible', true); self.MainViewer.set('toolTipEnabled', true); }; if(!imageHD){ imageHD = popupPanoramaOverlay.get('image'); } if(!toggleImageHD && toggleImage){ toggleImageHD = toggleImage; } popupPanoramaOverlay.bind('showEnd', showEndFunction, this, true); } else { var hideEndFunction = function() { self.resumePlayers(playersPaused, audio == null || stopBackgroundAudio); if(audio){ if(stopBackgroundAudio){ self.resumeGlobalAudios(); } self.stopGlobalAudio(audio); } popupPanoramaOverlay.unbind('hideEnd', hideEndFunction, self); self.MainViewer.set('toolTipEnabled', true); }; var playersPaused = this.pauseCurrentPlayers(audio == null || !stopBackgroundAudio); if(audio){ if(stopBackgroundAudio){ this.pauseGlobalAudios(); } this.playGlobalAudio(audio); } popupPanoramaOverlay.bind('hideEnd', hideEndFunction, this, true); } popupPanoramaOverlay.set('visible', true); }
 },
 "buttonToggleFullscreen": "this.IconButton_1A30344D_1556_E728_4168_08B49CEA2A64",
 "scrollBarColor": "#000000",
 "data": {
  "name": "Player465"
 },
 "mouseWheelEnabled": true,
 "shadow": false,
 "downloadEnabled": false,
 "defaultVRPointer": "laser"
};

    
    function HistoryData(playList) {
        this.playList = playList;
        this.list = [];
        this.pointer = -1;
    }

    HistoryData.prototype.add = function(index){
        if(this.pointer < this.list.length && this.list[this.pointer] == index) {
            return;
        }
        ++this.pointer;
        this.list.splice(this.pointer, this.list.length - this.pointer, index);
    };

    HistoryData.prototype.back = function(){
        if(!this.canBack()) return;
        this.playList.set('selectedIndex', this.list[--this.pointer]);
    };

    HistoryData.prototype.forward = function(){
        if(!this.canForward()) return;
        this.playList.set('selectedIndex', this.list[++this.pointer]);
    };

    HistoryData.prototype.canBack = function(){
        return this.pointer > 0;
    };

    HistoryData.prototype.canForward = function(){
        return this.pointer >= 0 && this.pointer < this.list.length-1;
    };
    //

    if(script.data == undefined)
        script.data = {};
    script.data["history"] = {};    //playListID -> HistoryData

    TDV.PlayerAPI.defineScript(script);
})();
