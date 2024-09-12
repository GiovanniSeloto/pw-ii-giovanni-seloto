import { Text, View, StyleSheet, SafeAreaView, Image, TextInput, Button } from "react-native";
import { StatusBar } from "expo-status-bar";

export default function Index() {

  const imgLocation = require('../src/Img/iconIndex.png')

  return (
    <SafeAreaView style={styles.contentContainer}>
      <View style={styles.container}>
        <Text style={styles.title}> Where are you going ?</Text>
      </View>
      <View>
        <Image
          style={styles.img}
          source={imgLocation}
        />
      </View>
      <View>
        <TextInput
          style={styles.input}
        />
      </View>
      <View>
        <Button
          title='name_One'
        />
      </View>
      <View>
        <Button
          title='name-Two'
        />
        <Button
          title='name_Three'
        />
      </View>
    </SafeAreaView>
  );
}
const styles = StyleSheet.create({
  contentContainer:{
    flex: 1,
    justifyContent: 'flex-start',
    alignItems: 'center',
    marginTop: 100
  },
  container:{
    marginBottom: 20
  },
  title:{
    fontSize: 30,
  },
  img:{
    width:200,
    height:200,
  },
  input:{
    backgroundColor: '#000',
    padding:10,
    borderRadius: 20,
    width: 300,
    marginTop: 20,
  }
});