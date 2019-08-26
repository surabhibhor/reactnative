import React from 'react';
import { StyleSheet, Text, View } from 'react-native';
import WebView from 'react-native-webview';

export default function App() {
  return (
   <WebView source={{uri: 'http:/192.168.0.117/mbreg/index.php'}}/>
  );
}

  


const styles = StyleSheet.create({
  container: {
    flex:1,
    backgroundColor: 'yellowgreen',
    alignItems: 'center',
    justifyContent: 'center',
  },
});
