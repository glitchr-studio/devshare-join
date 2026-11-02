// DevShare's demo React Native app: what a guest opens from the demo
// project's tile. The Mac app serves its production bundle itself, built
// once by app/demo/build.sh, as Metro would: it needs neither Node nor
// Docker on the host.

import { StatusBar } from 'expo-status-bar';
import { useRef, useState } from 'react';
import { Animated, Image, Pressable, StyleSheet, Text, View } from 'react-native';
import { logo } from './logo';

export default function App() {
  const [taps, setTaps] = useState(0);
  const spin = useRef(new Animated.Value(0)).current;

  function tap() {
    setTaps(taps + 1);
    spin.setValue(0);
    Animated.spring(spin, { toValue: 1, useNativeDriver: true }).start();
  }

  const rotate = spin.interpolate({ inputRange: [0, 1], outputRange: ['0deg', '360deg'] });

  return (
    <View style={styles.screen}>
      <Pressable onPress={tap} accessibilityRole="button" accessibilityLabel="DevShare logo">
        <Animated.View style={{ transform: [{ rotate }] }}>
          <Image source={{ uri: logo }} style={styles.logo} />
        </Animated.View>
      </Pressable>
      <Text style={styles.title}>It works!</Text>
      <Text style={styles.text}>
        This React Native app runs on your device, and its code came from the host's Mac,
        through the DevShare session.
      </Text>
      <Text style={styles.hint}>{taps === 0 ? 'Tap the logo.' : `Tapped ${taps} time${taps > 1 ? 's' : ''}.`}</Text>
      <StatusBar style="auto" />
    </View>
  );
}

const styles = StyleSheet.create({
  screen: { flex: 1, alignItems: 'center', justifyContent: 'center', padding: 32, gap: 18, backgroundColor: '#f6f5f2' },
  logo: { width: 128, height: 128 },
  title: { fontSize: 30, fontWeight: '700', color: '#1c1b1a' },
  text: { textAlign: 'center', fontSize: 16, lineHeight: 22, color: '#4a4845' },
  hint: { color: '#8a8782', fontSize: 14 },
});
